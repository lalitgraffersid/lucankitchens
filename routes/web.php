<?php
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('mail_test', function () {
    \Mail::raw('Hello lalit!', function($msg) {$msg->to('jaiswallalit21@gmail.com')->subject('Test Email'); });
          dd('mail send');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//=========================================================
Route::group(['prefix'=> 'admin'] , function(){
	Route::get('/login', array('uses' => 'Admin\LoginController@index'));
	Route::POST('/dologin', 'Admin\LoginController@postLogin');
	Route::get('/dashboard', ['as'=>'dashboard', 'middleware' => ['auth'], 'uses'=>'Admin\DashboardController@index']);

	Route::get('/reset_password', 'Admin\ResetPasswordController@getPassword');
	
	Route::POST('/changepassword', 'Admin\ResetPasswordController@postPasswordChange');
	//Route::POST('/update_password/{user}','Admin\ResetPasswordController@updatePassword');

	Route::post('/update-password', 'Admin\ResetPasswordController@updatePassword')->name('update-password');

	Route::get('/changepasswordlogout', 'Admin\ResetPasswordController@getChangePasswordLogout');

	Route::get('/viewforgotpassword', 'Admin\ForgotPasswordController@getForgotView');
	Route::POST('/forgotmail', 'Admin\ForgotPasswordController@sendForgotMail');

	Route::get('/changeforgotpasswordview', 'Admin\ForgotPasswordController@getForgotafterView');
	Route::POST('/changeforgotpasswordpost', 'Admin\ForgotPasswordController@postForgotPasswordChange');

	Route::get('/logout', 'Admin\LoginController@getLogout');
	Route::get('/settings', ['as'=>'settings', 'middleware' => ['auth'], 'uses'=>'Admin\DashboardController@setting']);
	Route::any('settings/update', ['as'=>'settings.update', 'middleware' => ['auth'], 'uses'=>'Admin\DashboardController@update']);
});

Route::group(['prefix'=> 'admin'] , function(){
	Route::get('member/index', ['as'=>'index', 'middleware' => ['auth'], 'uses'=>'Admin\MemberController@index']);
});
//#################### cms start ########################
Route::group(['prefix'=> 'admin'] , function(){
	Route::get('cms/index', ['as'=>'cms.index', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@index']);
	Route::get('cms/add', ['as'=>'cms.add', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@add']);
	//Route::POST('cms/add', ['as'=>'cms.add', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@add']);
	Route::POST('cms/save', ['as'=>'cms.save', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@save']);
	Route::any('cms/edit/{id}', ['as'=>'cms.edit', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@edit']);
	Route::any('cms/update', ['as'=>'cms.update', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@update']);
	Route::get('cms/delete/{id}', ['as'=>'cms.delete', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@delete']);
	Route::any('cms/change-status', ['as'=>'cmschangeStatus', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@changeStatus']);

	Route::any('cms/view/{id}', ['as'=>'cms.view', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@view']);

	Route::any('cms/set-status/{id}/', ['as'=>'cms_set_status', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@set_status']);
});

//######### cms end #########################################

//############## banner start ###############################
Route::group(['prefix'=> 'admin'] , function(){
	Route::get('banner/index', ['as'=>'banner.index', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@index']);
	Route::get('banner/add', ['as'=>'banner.add', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@add']);
	Route::POST('banner/save', ['as'=>'banner.save', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@save']);
	Route::any('banner/edit/{id}', ['as'=>'banner.edit', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@edit']);
	Route::any('banner/update', ['as'=>'banner.update', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@update']);
	Route::get('banner/delete/{id}', ['as'=>'banner.delete', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@delete']);
	

	Route::any('banner/view/{id}', ['as'=>'banner.view', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@view']);

	Route::any('banner/set-status/{id}/', ['as'=>'banner_set_status', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@set_status']);

	
	
});

 

///special///

Route::group(['prefix'=> 'admin'] , function(){
	Route::get('special/index', ['as'=>'special.index', 'middleware' => ['auth'], 'uses'=>'Admin\SpecialController@index']);
	Route::get('special/add', ['as'=>'special.add', 'middleware' => ['auth'], 'uses'=>'Admin\SpecialController@add']);
	Route::POST('special/save', ['as'=>'special.save', 'middleware' => ['auth'], 'uses'=>'Admin\SpecialController@save']);
	Route::any('special/edit/{id}', ['as'=>'special.edit', 'middleware' => ['auth'], 'uses'=>'Admin\SpecialController@edit']);
	Route::any('special/update', ['as'=>'special.update', 'middleware' => ['auth'], 'uses'=>'Admin\SpecialController@update']);
	Route::get('special/delete/{id}', ['as'=>'special.delete', 'middleware' => ['auth'], 'uses'=>'Admin\SpecialController@delete']);
	

	Route::any('banner/view/{id}', ['as'=>'banner.view', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@view']);

	Route::any('banner/set-status/{id}/', ['as'=>'banner_set_status', 'middleware' => ['auth'], 'uses'=>'Admin\BannerController@set_status']);

	
	
});





//################# banner end ###########################
//############## gallery start ###############################
Route::group(['prefix'=> 'admin'] , function(){
	Route::get('gallery/index', ['as'=>'gallery.index', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@index']);
	Route::get('gallery/add', ['as'=>'gallery.add', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@add']);
	Route::POST('gallery/save', ['as'=>'gallery.save', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@save']);
	Route::any('gallery/edit/{id}', ['as'=>'gallery.edit', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@edit']);
	Route::any('gallery/update', ['as'=>'gallery.update', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@update']);
	Route::get('gallery/delete/{id}', ['as'=>'gallery.delete', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@delete']);
	Route::any('gallery/set-status/{id}/', ['as'=>'gallery_set_status', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@set_status']);

	Route::any('gallery/view/{id}', ['as'=>'gallery.view', 'middleware' => ['auth'], 'uses'=>'Admin\GalleryController@view']);
});

//################# banner end ###########################


//############## Faq start ###############################
Route::group(['prefix'=> 'admin'] , function(){
	Route::get('faq/index', ['as'=>'faq.index', 'middleware' => ['auth'], 'uses'=>'Admin\FaqController@index']);
	Route::get('faq/add', ['as'=>'faq.add', 'middleware' => ['auth'], 'uses'=>'Admin\FaqController@add']);
	Route::POST('faq/save', ['as'=>'faq.save', 'middleware' => ['auth'], 'uses'=>'Admin\FaqController@save']);
	Route::any('faq/edit/{id}', ['as'=>'faq.edit', 'middleware' => ['auth'], 'uses'=>'Admin\FaqController@edit']);
	Route::any('faq/update', ['as'=>'faq.update', 'middleware' => ['auth'], 'uses'=>'Admin\FaqController@update']);
	Route::get('faq/delete/{id}', ['as'=>'faq.delete', 'middleware' => ['auth'], 'uses'=>'Admin\FaqController@delete']);

	Route::any('faq/set-status/{id}/', ['as'=>'faq_set_status', 'middleware' => ['auth'], 'uses'=>'Admin\FaqController@set_status']);

	
	
});

//################# Faq end ###########################



//====================Setting =====================================
Route::group(['prefix'=> 'admin'] , function(){

	Route::get('setting/index', ['as'=>'setting.index', 'middleware' => ['auth'], 'uses'=>'Admin\SettingController@index']);

	Route::POST('setting/update', ['as'=>'setting.update', 'middleware' => ['auth'], 'uses'=>'Admin\SettingController@update']);

	Route::get('setting/top', ['as'=>'setting.top', 'middleware' => ['auth'], 'uses'=>'Admin\SettingController@top']);

	Route::POST('setting/top_update', ['as'=>'setting.top_update', 'middleware' => ['auth'], 'uses'=>'Admin\SettingController@top_update']);
	
	});

//======================================================
//========= sebscription ===================
Route::group(['prefix'=> 'admin'] , function(){

	Route::get('subscription/index', ['as'=>'subscription.index', 'middleware' => ['auth'], 'uses'=>'Admin\SubscriptionController@index']);
	
	});
//==========================================
Route::group(['prefix'=> 'admin'] , function(){

	Route::get('contact/index', ['as'=>'contact.index', 'middleware' => ['auth'], 'uses'=>'Admin\ContactController@index']);
	Route::get('contact/delete/{id}', ['as'=>'contact.delete', 'middleware' => ['auth'], 'uses'=>'Admin\ContactController@delete']);
	});

//===============================================
//========== Others======================
Route::group(['prefix'=> 'admin'] , function(){

	Route::any('privacy/edit', ['as'=>'privacy.edit', 'middleware' => ['auth'], 'uses'=>'Admin\PrivacyController@edit']);
	Route::any('privacy/update', ['as'=>'privacy.update', 'middleware' => ['auth'], 'uses'=>'Admin\PrivacyController@update']);
});

//=========================================
//========== Testimonial ================
Route::group(['prefix'=> 'admin'] , function(){
	Route::get('testimonial/index', ['as'=>'testimonial.index', 'middleware' => ['auth'], 'uses'=>'Admin\TestimonialController@index']);
	Route::get('testimonial/add', ['as'=>'testimonial.add', 'middleware' => ['auth'], 'uses'=>'Admin\TestimonialController@add']);
	
	Route::POST('testimonial/save', ['as'=>'testimonial.save', 'middleware' => ['auth'], 'uses'=>'Admin\TestimonialController@save']);
	Route::any('testimonial/edit/{id}', ['as'=>'testimonial.edit', 'middleware' => ['auth'], 'uses'=>'Admin\TestimonialController@edit']);
	Route::any('testimonial/update', ['as'=>'testimonial.update', 'middleware' => ['auth'], 'uses'=>'Admin\TestimonialController@update']);
	Route::get('testimonial/delete/{id}', ['as'=>'testimonial.delete', 'middleware' => ['auth'], 'uses'=>'Admin\TestimonialController@delete']);
	Route::any('testimonial/change-status', ['as'=>'testimonialchangeStatus', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@changeStatus']);

	Route::any('testimonial/set-status/{id}/', ['as'=>'testimonial_set_status', 'middleware' => ['auth'], 'uses'=>'Admin\TestimonialController@set_status']);
});
//=====================================================
//=============== sales=================
Route::group(['prefix'=> 'admin'] , function(){
	Route::get('sale/index', ['as'=>'sales.index', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@index']);
	Route::get('sale/add', ['as'=>'sales.add', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@add']);
	//Route::POST('cms/add', ['as'=>'cms.add', 'middleware' => ['auth'], 'uses'=>'Admin\CmsController@add']);
	Route::POST('sale/save', ['as'=>'sales.save', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@save']);
	Route::any('sale/edit/{id}', ['as'=>'sales.edit', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@edit']);
	Route::any('sale/update', ['as'=>'sales.update', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@update']);
	Route::get('sale/delete/{id}', ['as'=>'sales.delete', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@delete']);
	Route::any('sale/change-status', ['as'=>'saleschangeStatus', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@changeStatus']);

	Route::any('sale/view/{id}', ['as'=>'sales.view', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@view']);

	Route::any('sale/set-status/{id}/', ['as'=>'sales_set_status', 'middleware' => ['auth'], 'uses'=>'Admin\SalesController@set_status']);
});

//===============================================


/*
|--------------------------------------------------------------------------
|Front Routes
|--------------------------------------------------------------------------
|
| All front routes
|
*/


Route::get('/', array('uses' => 'Front\HomeController@index'));

Route::any('/{slug}', [ 'as'=>'page', 'uses'=>'Front\CmsController@page']);
/*Route::any('/about', [ 'as'=>'page', 'uses'=>'Front\CmsController@page']);
Route::any('/mould-boxes', [ 'as'=>'page', 'uses'=>'Front\CmsController@page']);
Route::any('/parts', [ 'as'=>'page', 'uses'=>'Front\CmsController@page']);
Route::any('/machine-refurbishing', [ 'as'=>'machine', 'uses'=>'Front\CmsController@machine']);*/


//Route::get('/contact', array('uses' => 'Front\ContactController@index'));

Route::post('contact/save', ['as'=>'contact.save', 'uses'=>'Front\ContactController@save']);
Route::post('subscription/save', ['as'=>'subscription.save', 'uses'=>'Front\SubscriptionController@save']);

Route::get('contact/sendemail', 'Front\ContactController@fn_sendmail');