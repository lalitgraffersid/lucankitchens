<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Testimonial;
use Session;
use DB;
use Image;
use App\Http\Library\Slug;
use Illuminate\Support\Facades\Log;
use Exception;

class TestimonialController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$testimonials_data = array();
		$testimonialDetails = Testimonial::all();
		$testimonials_data['testimonialDetails'] = $testimonialDetails;
		
		return view('admin/testimonial/index',$testimonials_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		
		return view('admin/testimonial/add');
	}

	//=================================================================
	
	public function save(Request $request)
	{
		try {
			
	        //dd($request); die;
			$validator = Validator::make($request->all(), [
				'name' => 'required|unique:teams',
				'degination' => 'required',
				'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024',

			]);
			if ($validator->fails()) { 
				
			            return redirect('admin/testimonial/add')
			                        ->withErrors($validator)
			                        ->withInput();
			} else {			        
	        $testimonial = new \App\Models\Testimonial;
			//========================================================
			$testimonial_image = $request->file('profile_image');
			//dd($content_banner); die;
			if(!empty($testimonial_image)) {
	        $testimonialimage = time().'.'.$testimonial_image->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/testimonial/thumbnail');
		        $img = Image::make($testimonial_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$testimonialimage);

				$destinationPath = public_path('admin/clip-one/assets/testimonial/original');
		        $testimonial_image->move($destinationPath, $testimonialimage);
			} else {

				$testimonialimage = '';
			}

			//======================================================
				
	        //=========================================================
	        $testimonial->name = $request->name;
	        $testimonial->degination = $request->degination;
			$testimonial->description = $request->description;
	        $testimonial->profile_image = $testimonialimage;
	        $testimonial->status = 1;
	        

		    //dd($testimonial); die;
	        $testimonial->save();
			session()->flash('message', 'testimonial added successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/testimonial/index');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
	        session()->flash('message', 'Some error occured during save team');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('admin/testimonial/add');
	       
        }

	}
	//===========================================================================
	public function edit(Request $request)
	{

		$testimonial_id = $request->id;
		$testimonialDetail = Testimonial::where('id',$testimonial_id)->first();

		//dd($testimonialDetail);
		return view('admin/testimonial/edit')->with(compact('testimonialDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		$testimonial_id = $request->testimonial_id;
		$testimonialDetail = Testimonial::where('id',$testimonial_id)->first();
		$validator = Validator::make($request->all(), [
				'name' => 'required',
				'degination' => 'required',
				'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2024',

			]);
        try {
			//====================================
			$testimonial_image = $request->file('profile_image');
			//dd($team_image); die;
			if(!empty($team_image)) {
	        $testimonialimage = time().'.'.$testimonial_image->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/testimonial/thumbnail');
		        $img = Image::make($testimonial_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$testimonialimage);

				$destinationPath = public_path('admin/clip-one/assets/testimonial/original');
		        $testimonial_image->move($destinationPath, $testimonialimage);
			} else {

				$testimonialimage = $testimonialDetail->profile_image;
			}
			//====================================


	        $data= array(
						'name' => $request->name,
						'degination' => $request->degination,
						'description' => $request->description,
						'profile_image' => $testimonialimage,
						'status' => $testimonialDetail->status,
					);			//dd($data);
	        Testimonial::where('id', $request->testimonial_id)->update($data);
	        session()->flash('message', 'Testimonial updated successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/testimonial/index');
			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update team');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/testimonial/edit/'.$testimonial_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Testimonial::where('id', $id)->delete();
		session()->flash('message', 'Testimonial deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/testimonial/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete team page');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/testimonial/index');
        }
        
	}

	//=================================================================
	public function set_status(Request $request, $id){
		
		try {
			
			$testimonial = Testimonial::find($id);
			
			if($testimonial->status == '1')
			{
				$status = '0';
			} 
			else 
			{
				$status = '1';
			}
			$testimonial->status = $status;
			$testimonial->save();
			
		
			session()->flash('message', 'Testimonial status update successfully');
	        Session::flash('alert-class', 'alert-success');
	        return redirect('admin/testimonial/index');
	    } catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during status update');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/testimonial/index');
        }
    }

    //===================================================
	
	


}
