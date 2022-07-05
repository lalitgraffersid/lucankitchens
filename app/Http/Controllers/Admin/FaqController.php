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
use App\Models\Faq;
use Session;
use DB;
use Image;
use File;
use Illuminate\Support\Facades\Log;
use Exception;

class FaqController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$faq_data = array();
		$faqDetails = Faq::all();
		$faq_data['faqDetails'] = $faqDetails;
		
		return view('admin/faq/index',$faq_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		
		return view('admin/faq/add');
	}

	//=================================================================
	
	public function save(Request $request)
	{
		try {
			
	        //dd($request); die;
			$validator = Validator::make($request->all(), [
				'faq_title' => 'required',
				'faq_description' => 'required'
			]);
			if ($validator->fails()) { 
				
			            return redirect('admin/faq/add')
			                        ->withErrors($validator)
			                        ->withInput();
			} else {			        
	        $faq = new \App\Models\Faq;
	        //====== page faq=====================================
				
	        //=========================================================
	        $faq->faq_title = $request->faq_title;
	        $faq->faq_description = $request->faq_description;
	        $faq->status = '1';

		    //dd($cms); die;
	        $faq->save();
			session()->flash('message', 'faq added successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/faq/index');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
	        session()->flash('message', 'Some error occured during save faq');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('admin/faq/add');
	       
        }

	}
	//===========================================================================
	public function edit(Request $request,$id)
	{

		$faq_id = $id;
		$faqDetail = Faq::where('id',$faq_id)->first();

		// echo "<pre>";
		// print_r($faqDetail);die;

		
		return view('admin/faq/edit')->with(compact('faqDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		try {
				
				$faq_id = $request->id;
				$faqDetail = Faq::where('id',$faq_id)->first();
				$validator = Validator::make($request->all(), [
						'faq_title' => 'required',
						'faq_description' => 'required',
					]);

				if ($validator->fails()) { 
						//echo 'fails'; die;
						return redirect('admin/faq/edit/'.''.$faq_id)
						->withErrors($validator)
						->withInput();
				} else {
		        $data= array(
							'faq_title' => $request->faq_title,
							'faq_description' => $request->faq_description
						);
		       
		        Faq::where('id', $faq_id)->update($data);
		        session()->flash('message', 'Faq updated successfully');
				Session::flash('alert-class', 'alert-success'); 
				return redirect('admin/faq/index');
				}

			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update faq');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/faq/edit'.'/'.$faq_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Faq::where('id', $id)->delete();
		session()->flash('message', 'Faq deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/faq/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete faq page');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/faq/index');
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
