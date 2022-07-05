<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Gallery;
use Session;
use DB;
use Image;
use File;
use Illuminate\Support\Facades\Log;
use Exception;

class GalleryController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$gallery_data = array();
		$galleryDetails = Gallery::all();
		$gallery_data['galleryDetails'] = $galleryDetails;
		
		return view('admin/gallery/index',$gallery_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		$data = array();
		$data['title'] = 'Shop';
		return view('admin/gallery/add',$data);
	}

	//=================================================================
	
	public function save(Request $request)
	{
		try {
			
	        //dd($request); die;
			$validator = Validator::make($request->all(), [
				'gallery_title' => 'required',
				'gallery_image' => 'image|mimes:jpeg,png,jpg,gif|max:2024',

			]);
			if ($validator->fails()) { 
				
			            return redirect('admin/gallery/add')
			                        ->withErrors($validator)
			                        ->withInput();
			} else {			        
	        $gallery = new \App\Models\Gallery;
	        //====== page banner=====================================
			$gallery_image = $request->file('gallery_image');
			//dd($banner); die;
			if(!empty($gallery_image)) {
	        $imagename = time().'.'.$gallery_image->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/gallery/thumbnail');
		        $img = Image::make($gallery_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$imagename);

				$destinationPath = public_path('admin/clip-one/assets/gallery/original');
		        $gallery_image->move($destinationPath, $imagename);
			} else {

				$imagename = '';
			}
				
	        //=========================================================
	        $gallery->type = $request->type;
	        $gallery->gallery_title = $request->gallery_title;
	        $gallery->latest = $request->latest;
			$gallery->description = $request->description;
	        $gallery->gallery_image = $imagename;
	        $gallery->status = '1';
		    //dd($cms); die;
	        $gallery->save();
			session()->flash('message', 'Project added successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/gallery/index');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
	        session()->flash('message', 'Some error occured during save Project');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('admin/gallery/add');
	       
        }

	}
	//===========================================================================
	public function edit(Request $request,$id)
	{

		$gallery_id = $id;
		$galleryDetail = Gallery::where('id',$gallery_id)->first();

		
		return view('admin/gallery/edit')->with(compact('galleryDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		try {
				
				$gallery_id = $request->gallery_id;
				$image = $request->image;
				$galleryDetail = Gallery::where('id',$gallery_id)->first();
				if($image == 0){

				$validator = Validator::make($request->all(), [
						'gallery_title' => 'required',
						'gallery_image' => 'required|image|mimes:jpeg,png,jpg|max:20480',

					]);					
				} else {
				
				$validator = Validator::make($request->all(), [
						'gallery_title' => 'required',
					]);					
				}

				if ($validator->fails()) { 
						//echo 'fails'; die;
						return redirect('admin/gallery/edit/'.''.$gallery_id)
						->withErrors($validator)
						->withInput();
				} else {
       
        		//echo 'pass'; die;
				$galleryDetails = Gallery::find($gallery_id);
				$gallery = $request->file('gallery_image');
				
				if(!empty($gallery)) {
		        
		        
					$file1 = 'admin/clip-one/assets/gallery/thumbnail/'.$galleryDetails->gallery_image;
        			$file2 = 'admin/clip-one/assets/gallery/original/'.$galleryDetails->gallery_image;

        			File::delete($file1, $file2);
		        	$imagename = time().'.'.$gallery->getClientOriginalExtension();

				
			        $destinationPath = public_path('admin/clip-one/assets/gallery/thumbnail');
			        $img = Image::make($gallery->getRealPath());

			        $img->resize(100, 100, function ($constraint) {
					    $constraint->aspectRatio();
					})->save($destinationPath.'/'.$imagename);

					$destinationPath = public_path('admin/clip-one/assets/gallery/original');
			        $gallery->move($destinationPath, $imagename);
				} else {

				$imagename = $galleryDetail->gallery_image;
				}


		        $data= array(
							'gallery_title' => $request->gallery_title,
							'type' => $request->type,
							'latest' => $request->latest,
							'description' => $request->description,
							'gallery_image' => $imagename,
						);

		       
		        Gallery::where('id', $gallery_id)->update($data);
		        session()->flash('message', 'Project updated successfully');
				Session::flash('alert-class', 'alert-success'); 
				return redirect('admin/gallery/index');
				}

			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update Project');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/gallery/edit'.'/'.$gallery_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Gallery::where('id', $id)->delete();
		session()->flash('message', 'Project deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/gallery/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete Shop');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/gallery/index');
        }
        
	}

	//=================================================================
	//================================================================
	public function set_status(Request $request, $id){
		
		try {
			$gallery = Gallery::find($id);
			
			if($gallery->status == '1')
			{
				$status = '0';
			} 
			else 
			{
				$status = '1';
			}
			$gallery->status = $status;
			$gallery->save();
			
		
			session()->flash('message', 'Project status update successfully');
	        Session::flash('alert-class', 'alert-success');
	        return redirect('admin/gallery/index');
	    } catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occurred during status update');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/gallery/index');
        }
    }
	//===============================================================



}
