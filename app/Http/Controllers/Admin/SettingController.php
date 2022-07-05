<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Setting;
use Session;
use DB;
use Image;
use File;
use Illuminate\Support\Facades\Log;
use Exception;

class SettingController extends Controller
{
    //====================================

	//===================================
	public function index()
	{

		$setting_data = array();
		$setting_id = 1;
		$settingDetails = Setting::where('id',$setting_id)->first();
		
		$setting_data['settingDetails'] = $settingDetails;
		
		return view('admin/setting/index',$setting_data);
	}
	//====================================================
	public function update(Request $request)
	{
		try {
				
				$setting_id = 1;
				
		        $settings= array(
							'home_phone' => $request->home_phone,
							'email' => $request->email,
							'linkedin' => $request->linkedin,
							'address' => $request->address,
							'facebook' => $request->facebook,
							'youtube' => $request->youtube,
							'twitter' => $request->twitter,
							'instagram' => $request->instagram,
							'pinterest' => $request->pinterest,
							'googleplus' => $request->pinterest,
						);
		        
		        
		        Setting::where('id', $setting_id)->update($settings);

		        session()->flash('message', 'Setting updated successfully');
				Session::flash('alert-class', 'alert-success'); 
				return redirect('admin/setting/index');
				
				

			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update setting');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/setting/index');
	        }
	}

	//=================================================

}
