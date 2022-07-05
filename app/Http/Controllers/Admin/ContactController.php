<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Contact;
use Session;
use DB;
use Image;
use File;
use Illuminate\Support\Facades\Log;
use Exception;

class ContactController extends Controller
{
    //====================================

	//===================================
	public function index()
	{

		$contact_data = array();
		$contactDetails = Contact::all();
		
		$contact_data['contactDetails'] = $contactDetails;
		
		return view('admin/contact/index',$contact_data);
	}
	//====================================================

	//=================================================



}
