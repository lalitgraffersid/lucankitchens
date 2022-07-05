<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Special;
use Session;
use DB;
use Image;
use File;
use Illuminate\Support\Facades\Log;
use Exception;

class SpecialController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$special_data = array();
		$special_Details = Special::all();

		$special_data['specialDetails'] = $special_Details;
		
		return view('admin/special/index',$special_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		
		return view('admin/special/add');
	}

	//=================================================================
	

	public function edit(Request $request,$id)
	{

		$special_id = $id;
		$specialDetail = Special::where('id',$special_id)->get();

		
		return view('admin/special/edit')->with(compact('specialDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		try {

				$special_id = $request->special_id;
				$image = $request->image;
				$specialDetail = Special::where('id',$special_id)->first();
				if($image == 0){

				$validator = Validator::make($request->all(), [
						'special_title' => 'required',
						

					]);					
				} else {
				
				$validator = Validator::make($request->all(), [
						'special_title' => 'required',

					]);					
				}

				if ($validator->fails()) { 
						//echo 'fails'; die;
						return redirect('admin/special/edit/'.''.$special_id)
						->withErrors($validator)
						->withInput();
				} else {
       
        		//echo 'pass'; die;
				$specialDetails = Special::find($special_id);
				$special = $request->file('special_image');
				
				if(!empty($special)) {
		        
		        
					$file1 = '/admin/clip-one/assets/banner/thumbnail/'.$specialDetails->special_image;
        			$file2 = '/admin/clip-one/assets/banner/original/'.$specialDetails->special_image;

        			
		        	$imagename = time().'.'.$special->getClientOriginalExtension();

				
			        $destinationPath = public_path('/admin/clip-one/assets/banner/banner/thumbnail');
			        $img = Image::make($special->getRealPath());

			        $img->resize(100, 100, function ($constraint) {
					    $constraint->aspectRatio();
					})->save($destinationPath.'/'.$imagename);

					$destinationPath =  public_path('/admin/clip-one/assets/banner/banner/original');
			        $special->move($destinationPath, $imagename);
				} else {

				$imagename = $specialDetail->special_image;
				}


		        $data= array(
							'special_title' => $request->special_title,
							'special_description' => $request->special_description,
							'special_image' => $imagename,
						);

		       
		        Special::where('id', $special_id)->update($data);
		        session()->flash('message', 'Special updated successfully');
				Session::flash('alert-class', 'alert-success'); 
				return redirect('admin/special/index');
				}

			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update special');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/special/edit'.'/'.$special_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Special::where('id', $id)->delete();
		session()->flash('message', 'Special deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/special/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete special');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/special/index');
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