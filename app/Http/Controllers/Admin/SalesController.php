<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;
use Validator;
use Input;
use App\Models\User;
use App\Models\Sales;
use Session;
use DB;
use Image;
use App\Http\Library\Slug;
use Illuminate\Support\Facades\Log;
use Exception;

class SalesController extends Controller
{
    //=================================================================

	public function index()
	{  
		
		$sales_data = array();
		$salesDetails = Sales::all();
		$sales_data['salesDetails'] = $salesDetails;
		
		return view('admin/Sales/index',$sales_data);
	}

	//=================================================================

	public function add(Request $request)
	{  
		
		return view('admin/Sales/add');
	}

	//=================================================================
	
	public function save(Request $request)
	{
		try {
			
	        //dd($request); die;
			$validator = Validator::make($request->all(), [
				'type' => 'required',
				'manufacturer' => 'required',
				'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024',

			]);
			if ($validator->fails()) { 
				
			            return redirect('admin/sale/add')
			                        ->withErrors($validator)
			                        ->withInput();
			} else {			        
	        $Sales = new \App\Models\Sales;
			//========================================================
			$sale_image = $request->file('image');
			//dd($content_banner); die;
			if(!empty($sale_image)) {
	        $saleimage = time().'.'.$sale_image->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/sale/thumbnail');
		        $img = Image::make($sale_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$saleimage);

				$destinationPath = public_path('admin/clip-one/assets/sale/original');
		        $sale_image->move($destinationPath, $saleimage);
			} else {

				$saleimage = '';
			}

			//======================================================
				
	        //=========================================================
	        $Sales->type = $request->type;
	        $Sales->manufacturer = $request->manufacturer;
			$Sales->description = $request->description;
	        $Sales->image = $saleimage;
			$Sales->year = $request->year;
	        $Sales->status = '1';
		    //dd($Sales); die;
	        $Sales->save();
			session()->flash('message', 'sale added successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/sale/index');
			
			}
		
		} catch (\Exception $e) {
	        Log::error($e->getMessage());
	        session()->flash('message', 'Some error occured during save sale');
            Session::flash('alert-class', 'alert-danger');
           	return redirect('admin/sale/add');
	       
        }

	}
	//===========================================================================
	public function edit(Request $request)
	{

		$sale_id = $request->id;
		$saleDetail = Sales::where('id',$sale_id)->first();

		//dd($saleDetail);
		return view('admin/Sales/edit')->with(compact('saleDetail'));

	}

	//===========================================================================
	public function update(Request $request) {
		$sale_id = $request->sale_id;
		$saleDetail = Sales::where('id',$sale_id)->first();
		$validator = Validator::make($request->all(), [
				'type' => 'required',
				'manufacturer' => 'required',
				'image' => 'image|mimes:jpeg,png,jpg,gif|max:2024',

			]);
        try {
			//====================================
			$sale_image = $request->file('image');
			//dd($sale_image); die;
			if(!empty($sale_image)) {
	        $saleimage = time().'.'.$sale_image->getClientOriginalExtension();

			
		        $destinationPath = public_path('admin/clip-one/assets/sale/thumbnail');
		        $img = Image::make($sale_image->getRealPath());

		        $img->resize(100, 100, function ($constraint) {
				    $constraint->aspectRatio();
				})->save($destinationPath.'/'.$saleimage);

				$destinationPath = public_path('admin/clip-one/assets/sale/original');
		        $sale_image->move($destinationPath, $saleimage);
			} else {

				$saleimage = $saleDetail->image;
			}
			//====================================


	        $data= array(
						'type' => $request->type,
						'manufacturer' => $request->manufacturer,
						'description' => $request->description,
						'image' => $saleimage,
						'status' => $saleDetail->status,
						'year' => $request->year,
					);
	        Sales::where('id', $request->sale_id)->update($data);
	        session()->flash('message', 'sale updated successfully');
			Session::flash('alert-class', 'alert-success'); 
			return redirect('admin/sale/index');
			} catch (\Exception $e) {
	            Log::error($e->getMessage());
			    session()->flash('message', 'Some error occured during update sale');
	            Session::flash('alert-class', 'alert-danger');
	           return redirect('admin/sale/edit/'.$sale_id);
	        }
	}

	//===================================================================

	public function delete($id)
	{
		
		try {
		Sales::where('id', $id)->delete();
		session()->flash('message', 'sale deleted successfully');
		Session::flash('alert-class', 'alert-success'); 
		
		
		return redirect('admin/sale/index');
		} catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during delete sale page');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/sale/index');
        }
        
	}

	//=================================================================
	public function set_status(Request $request, $id){
		
		try {
			
			$Sales = Sales::find($id);
			
			if($Sales->status == '1')
			{
				$status = '0';
			} 
			else 
			{
				$status = '1';
			}
			$Sales->status = $status;
			$Sales->save();
			
		
			session()->flash('message', 'Sales status update successfully');
	        Session::flash('alert-class', 'alert-success');
	        return redirect('admin/sale/index');
	    } catch (\Exception $e) {
            Log::error($e->getMessage());
		    session()->flash('message', 'Some error occured during status update');
            Session::flash('alert-class', 'alert-danger');
          return redirect('admin/sale/index');
        }
    }

    //===================================================
	
	


}
