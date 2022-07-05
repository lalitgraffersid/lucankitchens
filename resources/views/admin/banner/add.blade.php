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
                  Add
                </li>
              </ol>
              <div class="page-header">
                <h1>Add Banner </h1>
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
            <!-- {!! Form::open(['url' => 'cms/save', 'method' => 'post', 'name' => 'cmsAdd', 'id' => 'cmsAdd', 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal' ]) !!}-->
           {!! Form::open(array('route' => 'banner.save','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'bannerAdd', 'name' => 'bannerAdd', 'files' => true, 'enctype' => 'multipart/form-data')) !!} 

                  
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_title">
                        Banner Type
                      </label>
                      <div class="col-sm-9">
                         <select name="type" class="form-control" required>
                         <option value="home">home</option>
                                                <option value="kitchen">kitchen</option>
                         <option value="wardrobe">wardrobe</option>
                         <option value="interior">interior</option>
                         <option value="faq">faq</option>
                         <option value="planner">planner</option>
                         <option value="bespoke">bespoke</option>
<option value="contact">contact-us</option>
                         </select>
                        
                      </div>
                    </div>
                   


                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_title">
                        Banner Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="banner_title" id="banner_title" placeholder="Title"  class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_description">
                        Banner Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="banner_description" name="banner_description" rows="7" class="form-control ckeditor" placeholder="Write your message.." required="required"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_image">
                      Banner Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="banner_image" required="required">
  [ dimensions:width=1808,height=734]
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                        <button type="submit" class="btn btn-primary" >Save</button>
                   
                    <a class="btn btn-green" href="{{ url('admin/banner/index') }}">Back</a>
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
    <script src="{{ asset('/admin/clip-one/assets/plugins/ckeditor/ckeditor.js') }}"></script>
  <!--    #################  cms form validation ##################### -->
  <script src="{{ asset('/admin/clip-one/assets/js/banner.js') }}"></script>
  <!--    #################  cms form validation ##################### -->
  <script type="text/javascript">
    var base_url = "{{url('')}}";
  </script>
  <script type="text/javascript">
        var editor = CKEDITOR.replace( 'banner_description', {

                             filebrowserBrowseUrl : '{{url('')}}/admin/clip-one/assets/plugins/ckfinder/ckfinder.html',

                             filebrowserImageBrowseUrl : '{{url('')}}/admin/clip-one/assets/plugins/ckfinder/ckfinder.html?type=Images',

                             filebrowserFlashBrowseUrl : '{{url('')}}/admin/clip-one/assets/plugins/ckfinder/ckfinder.html?type=Flash',

                             filebrowserUploadUrl : '{{url('')}}/admin/clip-one/assets/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                             filebrowserImageUploadUrl : '{{url('')}}/admin/clip-one/assets/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                             filebrowserFlashUploadUrl : '{{url('')}}/admin/clip-one/assets/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

                             }); 
  </script> 

@endsection
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->