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
                    Project 
                  </a>
                </li>
                <li class="active">
                  Edit
                </li>
              </ol>
              <div class="page-header">
                <h1>Edit Project </h1>
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

           {!! Form::open(array('route' => 'gallery.update','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'galleryEdit', 'name' => 'galleryEdit', 'files' => true, 'enctype' => 'multipart/form-data')) !!} 

                   <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_title">
                        Project Type
                      </label>
                      <div class="col-sm-9">

                        <select  name="type" class="form-control" required> 
                           <option value="">Select Type</option>
                           <option value="Kitchen" @if($galleryDetail->type == 'Kitchen') selected @endif>Kitchen</option>
                           <option value="Wardrobe" @if($galleryDetail->type == 'Wardrobe') selected @endif>Wardrobe</option>
                           <option value="Interior" @if($galleryDetail->type == 'Interior') selected @endif>Interior</option>
                            <option value="Bespokedoor" @if($galleryDetail->type == 'Bespokedoor') selected @endif>Bespokedoor</option>
                             <option value="Radiatorcover" @if($galleryDetail->type == 'Radiatorcover') selected @endif>Radiatorcover</option>
                         </select>
                        
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_title">
                        Project Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="gallery_title" id="page_title" placeholder="Title"  class="form-control" value="{{$galleryDetail->gallery_title}}" required="required">
                      </div>
                    </div>
					 <div class="form-group">

                      <label class="col-sm-2 control-label" for="description">

                       Description

                      </label>

                      <div class="col-sm-9">

                        <textarea id="description" name="description" rows="7" class="form-control" placeholder="Descripotion" required="required">{{$galleryDetail->description}}</textarea>

                      </div>

                    </div>
                    
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_title">
                        Latest
                      </label>
                      <div class="col-sm-9">
                        <input type="radio" value="yes" name="latest" @if($galleryDetail->latest == 'yes') checked @endif>Yes <input type="radio" value="no" name="latest" @if($galleryDetail->latest == 'no') checked @endif>No
                      </div>
                    </div> 

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_image">
                        Product Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="gallery_image">
                        @if (!empty($galleryDetail->gallery_image))
                          <br><img src="{{ asset("/admin/clip-one/assets/gallery/thumbnail") }}/{{$galleryDetail->gallery_image}}" alt=""> 
                   
                      @endif
                      </div>
                       
                    </div>
                    <input type="hidden" class="form-control" name="gallery_id" id="gallery_id" value="{{$galleryDetail->id}}">
                     <input type="hidden" class="form-control" name="image" id="image" value="1">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                       
                        <input type="submit" id="save" name="save" class="btn btn-primary" value="Update"/>
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
   <script src="{{ asset("/admin/clip-one/assets/js/gallery.js") }}"></script>
  <!--    #################  cms form validation ##################### -->


@endsection
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->