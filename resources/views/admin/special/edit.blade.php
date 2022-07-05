@extends('admin.layouts.innerpage')
@section('content')
    <!-- start: MAIN CONTAINER -->

        <div class="container" ng-controller="cmsController">
          <!-- start: PAGE HEADER -->
          
          <div class="row">
            <div class="col-sm-12">
              <!-- start: STYLE SELECTOR BOX -->
              <!-- end: STYLE SELECTOR BOX -->
              <!-- start: PAGE TITLE & BREADCRUMB -->
              <ol class="breadcrumb">
                <li>
                  <i class="clip-pencil"></i>
                  <a href="#">
                    Special 
                  </a>
                </li>
                <li class="active">
                  Edit
                </li>
              </ol>
              <div class="page-header">
                <h1>Edit Special</h1>
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

              <!-- ############ -- >
            </div>
          </div>
          <!-- end: PAGE HEADER -->
          <!-- start: PAGE CONTENT -->
          <div class="row">
            <div class="col-sm-12">
              <!-- start: TEXT FIELDS PANEL -->
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="alert-mesg" flash-message="@{{statusMesg}}"></div>
                  
           {!! Form::open(array('route' => 'special.update','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'specialEdit', 'name' => 'specialEdit', 'files' => true, 'enctype' => 'multipart/form-data')) !!} 

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_title">
                        Special Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="special_title" id="page_title" placeholder="Title"  class="form-control" value="{{$specialDetail[0]['special_title']}}" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="special_description">
                        Special Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="special_description" name="special_description" rows="7" class="form-control ckeditor" placeholder="Write your message.." required="required">{{$specialDetail[0]['special_description']}}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="special_image">
                        Special Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="special_image">
                        <!--@if (!empty($bannerDetail[0]['banner_image']))-->
                          <br><!--{{$bannerDetail[0]['banner_image']}}<img src="{{ asset('/admin/clip-one/assets/banner/original')}}/{{$bannerDetail[0]['banner_image']}}" alt=""> -->
						  
						  <img src="http://lucankitchens.ie/admin/clip-one/assets/banner/banner/original/{{$specialDetail[0]['special_image']}}" alt="" width="350" height="250"> 
                
                   <!--   @endif-->
                      </div>
                       
                    </div>
                    <input type="hidden" class="form-control" name="special_id" id="special_id" value="{{$specialDetail[0]['id']}}">
                     <input type="hidden" class="form-control" name="image" id="image" value="1">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                       
                        <input type="submit" id="save" name="save" class="btn btn-primary" value="Update"/>
                        <a class="btn btn-green" href="{{ url('admin/special/index') }}">Back</a>
                      </div>
                    </div>

                 {!! Form::close() !!}  
                </div>
              </div>
              <!-- end: TEXT FIELDS PANEL -->
            </div>
          </div>
          <!-- end: PAGE CONTENT-->
        </div>
    <!-- end: MAIN CONTAINER -->
  
@endsection

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@section('script')
  
  <!--    #################  cms form validation ##################### -->
   <script src="{{ asset("/admin/clip-one/assets/js/banner.js") }}"></script>
  <!--    #################  cms form validation ##################### -->


@endsection
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->