<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\User;
use App\Models\Cms;
use App\Models\Banner;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Special;
use App\Models\Testimonial;
use Validator;
use Cookie;
use Session;
use Crypt;
use Mail;
use Hash;
use Auth;

/*
|--------------------------------------------------------------------------
|HomeController
|--------------------------------------------------------------------------
|
| index
|
*/
class HomeController extends Controller
{
    
	//=====================================
    public function index() {
		
		
		$page_data = array();
		
		
		$banners = Banner::where('status', 1)->where('type','home')->get();
		$settings = Setting::where('id', 1)->first();
		
		$projects = Gallery::where('latest', 'yes')->take(3)->get();
		
		$special = Special::all();
		$about = Cms::where('id', 1)->first();
		$home_box = Cms::where('id', 3)->first();
		$homeBoxDes = $home_box->page_description;
		$about_page = $about->page_description;
		
		$testimonials = Testimonial::where('status', 1)->get();
		
		
		
		
		//====================================
		

		$page_data['page_name'] = 'Home';
		$page_data['page_title'] = 'Home';
		$page_data['breadcum']	= 'Home';
		$page_data['parent'] = 'Home';
		$page_data['banners'] = $banners;
		$page_data['settings'] = $settings;
		$page_data['about'] = $about;
		$page_data['about_page'] = $about_page;
		$page_data['homeBoxDes'] = $homeBoxDes;
		$page_data['projects'] = $projects;
		$page_data['specials'] = $special;
		$page_data['testimonials'] = $testimonials;
		
		return view('front.home.index',$page_data);

	}

	//====================================================
	


}