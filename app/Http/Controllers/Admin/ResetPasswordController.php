<?php
namespace App\Http\Controllers\Admin; 
   
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB; 
use App\User; 
use Validator;
use Cookie;
use Session;
use Crypt;
use Mail;
use Auth;

class ResetPasswordController extends Controller { 

  public function getPassword() { 
    //die('hello');
     return view('admin.reset2');
  }


  public function postPasswordChange(Request $request){

    $id   = $request->get('id');
    $current_password   = $request->get('current_password');
    $new_password   = $request->get('new_password');
    $confirm_password   = $request->get('confirm_password');

    $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:5',
            'confirm_password' => 'required|min:5'      
        ]);
        if ($validator->fails()) {
          $request->session()->flash('alert-warning', 'Please enter mandatory fields.');
                return redirect('admin/reset_password')->withErrors($validator);
          } else {

          if (Auth::attempt(['id' => $id, 'password' => $current_password]))
            {
              
            $update = \DB::table('users') ->where('id', $id) ->limit(1) ->update( [ 'password' => bcrypt($new_password) ]); 

            return redirect('admin/changepasswordlogout');       
            } else {
      
            return redirect()->back()
                ->with('message','Incorrect password')
                ->with('alert-class', 'alert-danger')
                ->withInput();
          }
      }
      
 
    }

    public function getChangePasswordLogout(){
        //dd(session()->all());
        Auth::logout();
        session()->flash('message', 'Password Changed successfully!, Please login');
        Session::flash('alert-class', 'alert-success'); 

        return redirect('admin/login');
    }


  public function updatePassword(Request $request)
    {

      $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
        
    
          // $id = $request->id;
          // $name = $request->name;
          // DB::update('update users set name = ? where id = ?',[$name,$id]);
          // echo "Record updated successfully.<br/>";
          
        return view('admin/dashboard'); 
           
    }

}
