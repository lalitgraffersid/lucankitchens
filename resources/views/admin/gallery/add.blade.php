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
                    {{$title}} 
                  </a>
                </li>
                <li class="active">
                  Add
                </li>
              </ol>
              <div class="page-header">
                <h1>Add Project </h1>
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
           {!! Form::open(array('route' => 'gallery.save','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'galleryAdd', 'name' => 'galleryAdd', 'files' => true, 'enctype' => 'multipart/form-data')) !!} 
                    


            <div class="form-group">
                <label class="col-sm-2 control-label" for="project_type">
                        Project Type
                      </label>
                      <div class="col-sm-9">
                         <select  name="type" class="form-control" required> 
                           <option value="">Select Type</option>
                           <option value="Kitchen">Kitchen</option>
                           <option value="Wardrobe">Wardrobe</option>
                           <option value="Interior">Interior</option>
                           <option value="Bespokedoor">Bespoke Door</option>
                           <option value="Radiatorcover">Radiator Cover</option>
                         </select>
                        
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_title">
                        Project Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="gallery_title" id="gallery_title" placeholder="Title"  class="form-control" required>
                      </div>
                    </div>
					<div class="form-group">

                      <label class="col-sm-2 control-label" for="description">

                        Description

                      </label>

                      <div class="col-sm-9">

                        <textarea id="description" name="description" rows="7" class="form-control" placeholder="Descripotion" required="required"></textarea>

                      </div>

                    </div>
                    
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_title">
                        Latest
                      </label>
                      <div class="col-sm-9">
                        <input type="radio" value="yes" name="latest">Yes <input type="radio" value="no" name="latest" checked>No
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_image">
                      Project Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="gallery_image" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                        <button type="submit" class="btn btn-primary" >Save</button>
                   
                    <a class="btn btn-green" href="{{ url('admin/gallery/index') }}">Back</a>
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