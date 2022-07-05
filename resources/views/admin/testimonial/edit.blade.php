@extends('admin.layouts.innerpage')
@section('content')
    <!-- start: MAIN CONTAINER -->

        <div class="container">
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
                    Testimonial
                  </a>
                </li>
                <li class="active">
                  Edit
                </li>
              </ol>
              <div class="page-header">
                <h1>Edit Testimonial </h1>
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
				@if(Session::has('message'))					<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message')}}</p>				@endif
            
           {!! Form::open(array('route' => 'testimonial.update','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'testimonialEdit', 'name' => 'testimonialEdit', 'files' => true, 'enctype' => 'multipart/form-data')) !!}  

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="name">
                        Name
                      </label>
                      <div class="col-sm-9">
                         <input type="text" name="name" id="name" placeholder="name" value="{{$testimonialDetail->name}}" class="form-control" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="degination">
                        Degination
                      </label>
                      <div class="col-sm-9">
                        <textarea id="degination" name="degination" rows="2" class="form-control" placeholder="degination Descripotion" required="required">{{$testimonialDetail->degination}}</textarea>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-2 control-label" for="description">
                       Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="description" name="description" rows="7" class="form-control" placeholder="Descripotion" required="required">{{$testimonialDetail->description}}</textarea>
                      </div>
                    </div>
					

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="profile_image">
                       Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="profile_image">
						@if ($testimonialDetail->profile_image)
                          <img src="{{ asset('/admin/clip-one/assets/testimonial/thumbnail') }}/{{$testimonialDetail->profile_image}}" alt=""> 
                   
						@endif
                      </div>
                    </div>
					
					
					 <input type="hidden" class="form-control" name="testimonial_id" id="testimonial_id" value="{{$testimonialDetail->id}}">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                        <button type="submit" class="btn btn-primary" >Update</button>
                   
                    <a class="btn btn-green" href="{{ url('admin/testimonial/index') }}">Back</a>
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
  
  <script src="{{ asset("/admin/clip-one/assets/plugins/ckeditor/ckeditor.js") }}"></script>
  <!--    #################  cms form validation ##################### -->
  <script src="{{ asset("/admin/clip-one/assets/js/cms.js") }}"></script>
  <!--    #################  cms form validation ##################### -->
  <script type="text/javascript">
    var base_url = "{{url('')}}";
  </script>

@endsection
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->