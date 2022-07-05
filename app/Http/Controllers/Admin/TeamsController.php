<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Teams;
use Session;
use DB;
use Image;
use App\Http\Library\Slug;
use Illuminate\Support\Facades\Log;
use Exception;

class TeamsController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$teams_data = array();
		$teamsDetails = Teams::all();
		$teams_data['teamsDetails'] = $teamsDetails;
		
		return view('admin/teams/index',$teams_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		
		return view('admin/teams/add');
	}

	//=================================================================
	
	public function save(Request $request)
	{
		try {
			
	        //dd($request); die;
			$validator = Validator::make($request->all(), [
				'name' => 'required|unique:teams',
				'degination' => 'required',
				'team_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024',

			]);
			if ($validator->fails()) { 
				
			            return redirect('admin/team/add')
			                        ->withErrors($validator)
			                        ->withInput();
			} else {			        
	        $teams = new \App\Models\Teams;
			//========================================================
			$team_image = $request->file('team_image');
			//dd($content_banner); die;
			if(!empty($team_image)) {
	        $teamimage = time().'.'.$team_image->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/team/thumbnail');
		        $img = Image::make($team_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$teamimage);

				$destinationPath = public_path('admin/clip-one/assets/team/original');
		        $team_image->move($destinationPath, $teamimage);
			} else {

				$teamimage = '';
			}

			//======================================================
				
	        //=========================================================
	        $teams->name = $request->name;
	        $teams->degination = $request->degination;
			$teams->personal_information = $request->personal_information;
	        $teams->team_image = $teamimage;
			$teams->phone = $request->phone;
			$teams->email = $request->email;
			$teams->facebook = $request->facebook;
			$teams->twitter = $request->twitter;
			$teams->linkedin = $request->linkedin;
			$teams->instagram = $request->instagram;
			$teams->pinterest = $request->pinterest;
			$teams->googleplus = $request->googleplus;
	        $teams->status = '1';
	        

		    //dd($teams); die;
	        $teams->save();
			session()->flash('message', 'Team added successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/team/index');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
	        session()->flash('message', 'Some error occured during save team');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('admin/team/add');
	       
        }

	}
	//===========================================================================
	public function edit(Request $request)
	{

		$team_id = $request->id;
		$teamDetail = Teams::where('id',$team_id)->first();

		//dd($teamDetail);
		return view('admin/teams/edit')->with(compact('teamDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		$team_id = $request->team_id;
		$teamDetail = Teams::where('id',$team_id)->first();
		$validator = Validator::make($request->all(), [
				'name' => 'required',
				'degination' => 'required',
				'team_image' => 'image|mimes:jpeg,png,jpg,gif|max:2024',

			]);
        try {
			//====================================
			$team_image = $request->file('team_image');
			//dd($team_image); die;
			if(!empty($team_image)) {
	        $teamimage = time().'.'.$team_image->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/team/thumbnail');
		        $img = Image::make($team_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$teamimage);

				$destinationPath = public_path('admin/clip-one/assets/team/original');
		        $team_image->move($destinationPath, $teamimage);
			} else {

				$teamimage = $teamDetail->team_image;
			}
			//====================================


	        $data= array(
						'name' => $request->name,
						'degination' => $request->degination,
						'personal_information' => $request->personal_information,
						'team_image' => $teamimage,
						'status' => $teamDetail->status,
						'phone' => $request->phone,
						'email' => $request->email,
						'facebook' => $request->facebook,
						'twitter' => $request->twitter,
						'instagram' => $request->instagram,
						'pinterest' => $request->pinterest,
						'googleplus' => $request->googleplus,
						'linkedin' => $request->linkedin,
						
					);
	        Teams::where('id', $request->team_id)->update($data);
	        session()->flash('message', 'Team updated successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/team/index');
			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update team');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/team/edit/'.$team_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Teams::where('id', $id)->delete();
		session()->flash('message', 'Team deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/team/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete team page');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/team/index');
        }
        
	}

	//=================================================================
	public function set_status(Request $request, $id){
		
		try {
			
			$teams = Teams::find($id);
			
			if($teams->status == '1')
			{
				$status = '0';
			} 
			else 
			{
				$status = '1';
			}
			$teams->status = $status;
			$teams->save();
			
		
			session()->flash('message', 'Teams status update successfully');
	        Session::flash('alert-class', 'alert-success');
	        return redirect('admin/team/index');
	    } catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during status update');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/team/index');
        }
    }

    //===================================================
	
	


}
