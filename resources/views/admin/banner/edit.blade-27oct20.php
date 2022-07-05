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
                    Banner 
                  </a>
                </li>
                <li class="active">
                  Edit
                </li>
              </ol>
              <div class="page-header">
                <h1>Edit Banner </h1>
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
                  
           {!! Form::open(array('route' => 'banner.update','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'bannerEdit', 'name' => 'bannerEdit', 'files' => true, 'enctype' => 'multipart/form-data')) !!} 

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_title">
                        Banner Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="banner_title" id="page_title" placeholder="Title"  class="form-control" value="{{$bannerDetail[0]['banner_title']}}" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_description">
                        Banner Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="banner_description" name="banner_description" rows="7" class="form-control ckeditor" placeholder="Write your message.." required="required">{{$bannerDetail[0]['banner_description']}}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_image">
                        Banner Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="banner_image">
                        @if (!empty($bannerDetail[0]['banner_image']))
                          <br><img src="{{ asset('/admin/clip-one/assets/banner/thumbnail') }}/{{$bannerDetail[0]['banner_image']}}" alt=""> 
                   
                      @endif
                      </div>
                       
                    </div>
                    <input type="hidden" class="form-control" name="banner_id" id="banner_id" value="{{$bannerDetail[0]['id']}}">
                     <input type="hidden" class="form-control" name="image" id="image" value="1">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                       
                        <input type="submit" id="save" name="save" class="btn btn-primary" value="Update"/>
                        <a class="btn btn-green" href="{{ url('admin/banner/index') }}">Back</a>
                      </div>
                    </div>

                 <!--  {!! Form::close() !!}  -->
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

