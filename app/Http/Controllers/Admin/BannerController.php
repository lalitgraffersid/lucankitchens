<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Banner;
use Session;
use DB;
use Image;
use File;
use Illuminate\Support\Facades\Log;
use Exception;

class BannerController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$banner_data = array();
		$bannerDetails = Banner::all();
		$banner_data['bannerDetails'] = $bannerDetails;
		
		return view('admin/banner/index',$banner_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		
		return view('admin/banner/add');
	}

	//=================================================================
	
	public function save(Request $request)
	{
		try {
			
	        //dd($request); die;
			$validator = Validator::make($request->all(), [
				'banner_title' => 'required',
				'banner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=1808,height=734',

			]);
			if ($validator->fails()) { 
				
			            return redirect('admin/banner/add')
			                        ->withErrors($validator)
			                        ->withInput();
			} else {			        
	        $banner = new \App\Models\Banner;
	        //====== page banner=====================================
			$banner_image = $request->file('banner_image');
			//dd($banner); die;
			if(!empty($banner_image)) {
	        $imagename = time().'.'.$banner_image->getClientOriginalExtension();

			
		        //$destinationPath = public_path('/admin/clip-one/assets/banner/thumbnail');
		        $destinationPath = public_path('/admin/clip-one/assets/banner/banner/thumbnail');
		        
		        $img = Image::make($banner_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$imagename);

				$destinationPath = public_path('/admin/clip-one/assets/banner/banner/original');
		        $banner_image->move($destinationPath, $imagename);
			} else {

				$imagename = '';
			}
				
	        //=========================================================
	        $banner->banner_title = $request->banner_title;
	        $banner->type = $request->type;
	        $banner->banner_description = $request->banner_description;
	        $banner->banner_image = $imagename;
	        $banner->status = '1';


		    //dd($cms); die;
	        $banner->save();
			session()->flash('message', 'Banner added successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/banner/index');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
	        session()->flash('message', 'Some error occured during save banner');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('admin/banner/add');
	       
        }

	}
	//===========================================================================
	public function edit(Request $request,$id)
	{

		$banner_id = $id;
		$bannerDetail = Banner::where('id',$banner_id)->get();

		
		return view('admin/banner/edit')->with(compact('bannerDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		try {
				
				$banner_id = $request->banner_id;
				$image = $request->image;

				$bannerDetail = Banner::where('id',$banner_id)->first();
				if($image == 0){

				$validator = Validator::make($request->all(), [
						'banner_title' => 'required',
						'banner_image' => 'required|image|mimes:jpeg,png,jpg|max:20480',

					]);					
				} else {
				
				$validator = Validator::make($request->all(), [
						'banner_title' => 'required',

					]);					
				}

				if ($validator->fails()) { 
						//echo 'fails'; die;
						return redirect('admin/banner/edit/'.''.$banner_id)
						->withErrors($validator)
						->withInput();
				} else {
       
        		//echo 'pass'; die;
				$bannerDetails = Banner::find($banner_id);
				$banner = $request->file('banner_image');
				
				if(!empty($banner)) {
		        
		        
					$file1 = '/admin/clip-one/assets/banner/banner/thumbnail/'.$bannerDetails->banner_image;
        			$file2 = '/admin/clip-one/assets/banner/banner/original/'.$bannerDetails->banner_image;

        			File::delete($file1, $file2);
		        	$imagename = time().'.'.$banner->getClientOriginalExtension();

				
			        $destinationPath = public_path('/admin/clip-one/assets/banner/banner/thumbnail');
			        $img = Image::make($banner->getRealPath());

			        $img->resize(100, 100, function ($constraint) {
					    $constraint->aspectRatio();
					})->save($destinationPath.'/'.$imagename);

					$destinationPath =  public_path('/admin/clip-one/assets/banner/banner/original');
			        $banner->move($destinationPath, $imagename);
				} else {

				$imagename = $bannerDetail->banner_image;
				}


		        $data= array(
							'banner_title' => $request->banner_title,
							'type' => $request->type,
							'banner_description' => $request->banner_description,
							'banner_image' => $imagename,
						);

		       
		        Banner::where('id', $banner_id)->update($data);
		        session()->flash('message', 'Banner updated successfully');
				Session::flash('alert-class', 'alert-success'); 
				return redirect('admin/banner/index');
				}

			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update banner');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/banner/edit'.'/'.$banner_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Banner::where('id', $id)->delete();
		session()->flash('message', 'Banner deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/banner/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete cms page');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/banner/index');
        }
        
	}

	//================================================================

	//================================================================
	public function set_status(Request $request, $id){
		
		try {
			$banner = Banner::find($id);
			
			if($banner->status == '1')
			{
				$status = '0';
			} 
			else 
			{
				$status = '1';
			}
			$banner->status = $status;
			$banner->save();
			
		
			session()->flash('message', 'Banner status update successfully');
	        Session::flash('alert-class', 'alert-success');
	        return redirect('admin/banner/index');
	    } catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during status update');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/banner/index');
        }
    }
	//======================================================
	//======================================================



}