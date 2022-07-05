<?php
namespace App\Http\Controllers\Admin; 
use Illuminate\Http\Request;

use App\Rules\MatchOldPassword;
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

class ForgotPasswordController extends Controller { 

  public function getForgotView() { 
     return view('admin.forgot_password');
  }

  public function getForgotafterView() { 
     return view('admin.change_forgot_pass');
  }

  public function sendForgotMail(Request $request) {
      
      $email =$request->input('email');
      $user = User::where('email',$email)->first();

      if ($user) {

        $data = array('name'=>"Admin",'link'=>"https://lucankitchens.ie/admin/changeforgotpasswordview/?email=$email");

        $to_name = $request->get('email');
        $to_email = $request->get('email');

        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
          $message->to($to_email, $to_name)
          ->subject('Change Your Password');
          $message->from('aakashsoni048@gmail.com','Change Your Password');
        });

        return redirect()->back()->with('message','Email Send to Admin mail pls check')
                    ->with('alert-class', 'alert-danger')
                    ->withInput();

      }
      else {
        return redirect()->back()->with('message','Your Email Not In Our Database..')
                    ->with('alert-class', 'alert-danger')
                    ->withInput();
      }
  }

  public function postForgotPasswordChange(Request $request){
   
    $email   = $request->get('email');
    $new_password   = $request->get('new_password');
    $confirm_password   = $request->get('confirm_password');

    $validator = Validator::make($request->all(), [
            'new_password' => 'required|min:5',
            'confirm_password' => 'required|min:5'      
        ]);
        if ($validator->fails()) {
      $request->session()->flash('alert-warning', 'Please enter mandatory fields.');
            return redirect('admin/viewforgotpassword')->withErrors($validator);
    } else {
          
      $email =$request->input('email');
      $user = User::where('email',$email)->first();
      if ($user) {
         
        $update = \DB::table('users') ->where('email', $email) ->limit(1) ->update( [ 'password' => bcrypt($new_password) ]); 

        return redirect()->back()->with('message','Password Changed Successfull')
                    ->with('alert-class', 'alert-danger')
                    ->withInput();

        return redirect('admin/login');       
        } else {
      
            return redirect()->back()
                ->with('message','Email Not Matched')
                ->with('alert-class', 'alert-danger')
                ->withInput();
          }
      }
      
 
    }

}
