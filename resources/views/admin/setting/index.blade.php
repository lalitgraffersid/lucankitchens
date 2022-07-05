@extends('admin.layouts.innerpage')
@section('content')
    <!-- start: MAIN CONTAINER -->    

    <div class="container">
          <!-- start: PAGE HEADER -->
          <div class="row">
            <div class="col-sm-12">
           
              <!-- start: PAGE TITLE & BREADCRUMB -->
              <ol class="breadcrumb">
                <li>
                  <i class="clip-home-3"></i>
                  <a href="{{url('admin/dashboard/')}}">
                    Home
                  </a>
                </li>
                <li class="active">
                  Dashboard
                </li>
              </ol>
              <div class="page-header">               
                <h1>Settings</h1>
              </div>
              <!-- end: PAGE TITLE & BREADCRUMB -->
               <!-- Display all errors -->
              @if (count($errors) > 0)
              <div class="alert alert-danger val-error-list">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            </div>
          </div>
          <!-- end: PAGE HEADER -->
          <!-- start: PAGE CONTENT -->
          
         <div class="panel-body">
                  {!! Form::open(array('route' => 'setting.update','method'=>'POST', 'role' => 'form' ,'name' => 'setting', 'id' => 'setting', 'files' => true, 'enctype' => 'multipart/form-data')) !!} 
                  
                    <div class="row">
                      @if(Session::has('message'))
                       <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message')}}</p>
                      @endif
                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label class="control-label">
                            Home phone <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="home_phone" class="form-control" id="home_phone" name="home_phone" value="{{$settingDetails->home_phone}}">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Facebook <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="facebook" class="form-control" id="facebook" name="facebook" value="{{$settingDetails->facebook}}">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Youtube <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="Youtube" class="form-control" id="youtube" name="youtube" value="{{$settingDetails->youtube}}">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Instagram <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="instagram" class="form-control" id="instagram" name="instagram" value="{{$settingDetails->instagram}}">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Google Plus <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="googleplus" class="form-control" id="googleplus" name="googleplus" value="{{$settingDetails->googleplus}}">
                        </div>
                        
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">
                            Email Address <span class="symbol"></span>
                          </label>
                          <input type="email" placeholder="Text Field" class="form-control" id="email" name="email" value="{{$settingDetails->email}}">
                        </div>
                        <div class="form-group">
                          <label class="control-label">
                            linkedin <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="linkedin" class="form-control" id="linkedin" name="linkedin" value="{{$settingDetails->linkedin}}">
                        </div>
                        <div class="form-group">
                          <label class="control-label">
                            Address <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="Address" class="form-control" id="address" name="address"  value="{{$settingDetails->address}}">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Twitter <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="Twitter" class="form-control" id="twitter" name="twitter" value="{{$settingDetails->twitter}}">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Pinterest <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="pinterest" class="form-control" id="pinterest" name="pinterest" value="{{$settingDetails->pinterest}}">
                        </div>
   
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-primary" >Update</button>
                   
                        <a class="btn btn-green" href="{{ url('admin/dashboard') }}">Back</a>
                      </div>
                      
                    </div>
                  {!! Form::close() !!} 
                </div>
          
          
          <!-- end: PAGE CONTENT-->
        </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
@endsection

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@section('script')
  
  <!--    #################  setting form validation ##################### -->
  <script src="{{ asset("/admin/clip-one/assets/js/setting.js") }}"></script>
  <!--    #################  cms form validation ##################### -->


@endsection
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
