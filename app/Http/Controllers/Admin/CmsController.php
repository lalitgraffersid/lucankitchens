<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Cms;
use Session;
use DB;
use Image;
use App\Http\Library\Slug;
use Illuminate\Support\Facades\Log;
use Exception;

class CmsController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$cms_data = array();
		$cmsDetails = Cms::where('id',1)->get();
		$cms_data['cmsDetails'] = $cmsDetails;
		
		return view('admin/cms/index',$cms_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		
		return view('admin/cms/add');
	}

	//=================================================================
	
	public function save(Request $request)
	{
		try {
			
	        //dd($request); die;
			$validator = Validator::make($request->all(), [
				'page_title' => 'required|unique:cms',
				'meta_title' => 'required',
				'meta_description' => 'required',
				'page_description' => 'required',
				/*'page_banner' => 'image|mimes:jpeg,png,jpg,gif|max:2024',*/

			]);
			if ($validator->fails()) { 
				
			            return redirect('admin/cms/add')
			                        ->withErrors($validator)
			                        ->withInput();
			} else {			        
	        $cms = new \App\Models\Cms;
	        //====== page banner=====================================
			$banner = $request->file('page_banner');
			//dd($banner); die;
			if(!empty($banner)) {
	        $imagename = time().'.'.$banner->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/page_banner/thumbnail');
		        $img = Image::make($banner->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$imagename);

				$destinationPath = public_path('admin/clip-one/assets/page_banner/original');
		        $banner->move($destinationPath, $imagename);
			} else {

				$imagename = '';
			}

			//========================================================
			$content_banner = $request->file('content_banner');
			//dd($banner); die;
			if(!empty($content_banner)) {
	        $contentimage = time().'.'.$content_banner->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/page_banner/thumbnail');
		        $img = Image::make($content_banner->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$contentimage);

				$destinationPath = public_path('admin/clip-one/assets/page_banner/original');
		        $banner->move($destinationPath, $contentimage);
			} else {

				$contentimage = '';
			}

			//======================================================
				
	        //=========================================================
	        $cms->page_title = $request->page_title;
	        $cms->meta_title = $request->meta_title;
	        $cms->meta_description = $request->meta_description;
	        $cms->meta_keyword = $request->meta_keyword;
	        $cms->page_description = $request->page_description;
			$cms->banner_description = $request->banner_description;
	        $cms->page_banner = $imagename;
	        $cms->content_banner = $contentimage;
	        $cms->status = '1';
	        //=== create page slug
	        $slug = new Slug;
		    $slug_name = $slug->createSlug($request->page_title,'Cms');
		    $cms->slug_name = $slug_name;

		    //dd($cms); die;
	        $cms->save();
			session()->flash('message', 'cms added successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/cms/index');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
	        session()->flash('message', 'Some error occured during save cms');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('admin/cms/add');
	       
        }

	}
	//===========================================================================
	public function edit(Request $request)
	{

		$cms_id = $request->id;
		$cmsDetail = Cms::where('id',$cms_id)->get();

		
		return view('admin/cms/edit')->with(compact('cmsDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		$cms_id = $request->cms_id;
		$cmsDetail = Cms::where('id',$cms_id)->first();
		$validator = Validator::make($request->all(), [
				'page_title' => 'required',
				'meta_title' => 'required',
				'meta_description' => 'required',
				'page_description' => 'required',
				/*'page_banner' => 'image|mimes:jpeg,png,jpg,gif|max:2024',*/

			]);
        try {
        

			$banner = $request->file('page_banner');
			//dd($banner); die;
			if(!empty($banner)) {
	        $imagename = time().'.'.$banner->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/page_banner/thumbnail');
		        $img = Image::make($banner->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$imagename);

				$destinationPath = public_path('admin/clip-one/assets/page_banner/original');
		        $banner->move($destinationPath, $imagename);
			} else {

				$imagename = $cmsDetail->page_banner;
			}

			//====================================
			$content_banner = $request->file('content_banner');
			//dd($banner); die;
			if(!empty($content_banner)) {
	        $contentimage = time().'.'.$content_banner->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/page_banner/thumbnail');
		        $img = Image::make($content_banner->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$contentimage);

				$destinationPath = public_path('admin/clip-one/assets/page_banner/original');
		        $content_banner->move($destinationPath, $contentimage);
			} else {

				$contentimage = $cmsDetail->content_banner;
			}
			//====================================


	        $data= array(
						'page_title' => $request->page_title,
						'meta_title' => $request->meta_title,
						'meta_description' => $request->meta_description,
						'page_description' => $request->page_description,
						'banner_description' => $request->banner_description,
						'page_banner' => $imagename,
						'content_banner' => $contentimage,
						'status' => '1',
					);
	        Cms::where('id', $request->cms_id)->update($data);
	        session()->flash('message', 'Cms updated successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/cms/index');
			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update cms');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/cms/edit/'.$cms_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Cms::where('id', $id)->delete();
		session()->flash('message', 'Cms deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/cms/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete cms page');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/cms/index');
        }
        
	}

	//=================================================================
	public function set_status(Request $request, $id){
		
		try {
			
			$cms = Cms::find($id);
			
			if($cms->status == '1')
			{
				$status = '0';
			} 
			else 
			{
				$status = '1';
			}
			$cms->status = $status;
			$cms->save();
			
		
			session()->flash('message', 'Cms status update successfully');
	        Session::flash('alert-class', 'alert-success');
	        return redirect('admin/cms/index');
	    } catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during status update');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/cms/index');
        }
    }

    //===================================================
	
	


}