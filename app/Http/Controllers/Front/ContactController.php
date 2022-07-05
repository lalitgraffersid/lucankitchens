<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\User;
use App\Models\Cms;
use App\Models\Setting;
use App\Models\Contact;
use Validator;
use Cookie;
use Session;
use Crypt;
use Mail;
use Hash;
use Auth;
use Illuminate\Support\Facades\Log;
/*
|--------------------------------------------------------------------------
|HomeController
|--------------------------------------------------------------------------
|
| index
|
*/
class ContactController extends Controller
{
    
	//=====================================
    public function save(Request $request) {
		try {
			$validator = Validator::make($request->all(), [
				'name' => 'required',
				'email' => 'required',
				'phone' => 'required',
				'message' => 'required',

			]);
			if ($validator->fails()) { 
			            return redirect('/contact-us')
			                        ->withErrors($validator)
			                        ->withInput();
			} else { 		        
	        $contact = new \App\Models\Contact;
	        $contact->name = $request->name;
	        $contact->email = $request->email;
	        $contact->phone = $request->phone;
			$contact->about = $request->about;
			$contact->address = $request->address;
			$contact->city = $request->city;
			$contact->country = $request->country;
	        $contact->message = $request->message;
	       
		    //dd($contact); die;
	        $contact->save();

	        //==== send mail start =====

			$data = array(
	            'name' => $request->name,
	            'email' => $request->email,
	            'phone' => $request->phone,
				'about' => $request->about,
				'address' => $request->address,
				'city' => $request->city,
				'country' => $request->country,
	            'description' => $request->message,
	            'title' => 'Lucankitchens::Contact'
        	);
				
		  //Mail::send('front.emails.emailContact', $data, function ($message) {
	    	//	$message->from('victoria@lucankitchens.ie', 'Lucankitchens Contact');
	    	//	$message->to('victoria@lucankitchens.ie')->subject('Lucankitchens::Contact!');
    		//});
				
			Mail::send('front.emails.emailContact', $data, function ($message) {
	    		$message->from('victoria@lucankitchens.com', 'Lucankitchens Contact');
	    		$message->to('victoria@lucankitchens.ie')->subject('Lucankitchens::Contact!');
    		});
				
        	if(Mail::failures()) {
		       	session()->flash('message', 'Mail not sent!');
				Session::flash('alert-class', 'alert-danger');
				return redirect('/contact-us');
		    }

	        //==== end mail script ======
			session()->flash('message', 'Thanks for contacting us.We will contact you soon!');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('/contact-us');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
			//dd($e);
	        session()->flash('message', 'Thanks for contacting us.We will contact you soon!');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('/contact-us');
        }
	}

	//====================================================
	public function fn_sendmail()
    {
		
		try{
    		$data = array(
	            'name' => 'name',
	            'email' => 'email',
	            'phone' => 'phone',
	            'description' => 'description',
	            'title' => 'Lucankitchens::Contact'
        	);
	 

			Mail::raw($data, function ($message) {
				$message->from('victoria@lucankitchens.com', 'Learning Laravel');
				$message->to('victoria@lucankitchens.ie');
				$message->subject('Learning Laravel test email');
			});

			// check for failures
			if (Mail::failures()) {
				session()->flash('message', 'Thanks for contacting us.We will contact you soon!');
				Session::flash('alert-class', 'alert-danger');
				return redirect('/contact-us');
			} 
		}
		catch (\Exception $e) {
	        //Log::error($e->getMessage());
			dd($e);
		}
    	//echo 'ddd';  die;
		
    		 
    }
}
	