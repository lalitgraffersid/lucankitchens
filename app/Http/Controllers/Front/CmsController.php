<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;
use Validator;
use Cookie;
use Session;
use App\Models\Cms;
use App\Models\Setting;
use App\Models\Gallery;
use App\Models\Banner;
use App\Models\Special;
use App\Models\Testimonial;
use App\Models\Sales;
use App\Models\Faq;
use DB;
use Crypt;
use Mail;
use View;


/*
|--------------------------------------------------------------------------
|HomeController
|--------------------------------------------------------------------------
|
| index
|
*/
class CmsController extends Controller
{
    
	//=====================================
	   public function page(Request $request, $slug){
			
			$page_data = array();
			
			$cms = Cms::where('slug_name', 'LIKE', "%$slug%")->first();
			if($cms){
				$page_data['cms_data'] = $cms;
			} else {

				$page_data['cms_data'] = '';
			}
			//====================================
			
			$page_data['slug'] = $slug;
			//dd($page_data);
			$about = Cms::where('id', 1)->first();
			$about_page = substr($about->page_description, 0, 250);
			$home_box = Cms::where('id', 3)->first();
			$homeBoxDes = $home_box->page_description;
			$page_data['homeBoxDes'] = $homeBoxDes;
			
			$products = Gallery::where('status', 1)->get();
			$page_data['products'] = $products;
			
			$testimonials = Testimonial::where('status', 1)->get();
			$page_data['testimonials'] = $testimonials;
			
			$sales = Sales::where('status', 1)->get();
			$page_data['sales'] = $sales;
			
			//dd($products);

			//==== end gallery ==========
			$settings = Setting::where('id', 1)->first();
			$page_data['settings'] = $settings;

			
			
			$page_data['about'] = $about;
			$page_data['about_page'] = $about_page;
		
			if($slug == 'kitchens') {

		       $banners = Banner::where('status',1)->where('type','kitchen')->get();
		     
               $project = Gallery::where('type','Kitchen')->get();
			   $page_data['project'] = $project;
               $page_data['banners'] = $banners; 
			   return view('front/kitchens',$page_data);
			}

            if($slug == 'interiors') {

		       $banners = Banner::where('status', 1)->where('type','interior')->get();
               $project = Gallery::where('type','Interior')->get();
			   $page_data['project'] = $project;
			   $page_data['banners'] = $banners;

			   return view('front/interior',$page_data);
			
			}
 
			elseif($slug == 'wardrobes'){
			   $banners = Banner::where('status', 1)->where('type','wardrobe')->get();	
			   $project = Gallery::where('type','Wardrobe')->get();
			   $page_data['project'] = $project;
			   $page_data['banners'] = $banners;

				return view('front/wardrobes',$page_data);
			} elseif ($slug == 'contact-us') {
				$banners = Banner::where('status', 1)->where('type','contact')->get();
				$page_data['banners'] = $banners;
				$contactDetails = Setting::where('id', 1)->first();
				$page_data['contactDetails'] = $contactDetails;
	   			return view('front/contact',$page_data);
			} elseif($slug == 'faq'){
                $banners = Banner::where('status', 1)->where('type','faq')->get();
				$faq_details = Faq::where('status',1)->get();
				$page_data['faq_details'] = $faq_details;
                $page_data['banners'] = $banners;
				return view('front/faq',$page_data);
			} elseif($slug == 'about'){

				 $special = Special::all();
                $page_data['special'] = $special;
				return view('front/about',$page_data);
			} elseif($slug == 'planners'){
				$banners = Banner::where('status', 1)->where('type','planner')->get(); 
				$page_data['banners'] = $banners;
				return view('front/planners',$page_data);
			} else {
                           
                 $banners = Banner::where('status', 1)->where('type','bespoke')->get();
                 $project = Gallery::all();
			     $page_data['project'] = $project;
                 $page_data['banners'] = $banners;
				return view('front/bespoke',$page_data);

			}

			//return view('front/cms',$page_data);
			//return View::Make('front.cms')->with('data',$page_data);
		}
	//==========================================================
	//==========================================================

	
    


	

















}