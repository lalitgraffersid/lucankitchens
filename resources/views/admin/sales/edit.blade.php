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
                    Sales
                  </a>
                </li>
                <li class="active">
                  Edit
                </li>
              </ol>
              <div class="page-header">
                <h1>Edit Sale </h1>
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
            
           {!! Form::open(array('route' => 'sales.update','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'salesEdit', 'name' => 'salesEdit', 'files' => true, 'enctype' => 'multipart/form-data')) !!}

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="type">
                        Type
                      </label>
                      <div class="col-sm-9">
                         <input type="text" name="type" id="type" placeholder="type" value="{{$saleDetail->type}}" class="form-control" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="manufacturer">
                        Manufacturer
                      </label>
                      <div class="col-sm-9">
                        <textarea id="manufacturer" name="manufacturer" rows="2" class="form-control" placeholder="manufacturer" required="required">{{$saleDetail->manufacturer}}</textarea>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-2 control-label" for="description">
                       Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="description" name="description" rows="7" class="form-control" placeholder="description" required="required">{{$saleDetail->description}}</textarea>
                      </div>
                    </div>
					

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="image">
                       Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="image">
						@if ($saleDetail->image)
                          <img src="{{ asset('/admin/clip-one/assets/sale/thumbnail') }}/{{$saleDetail->image}}" alt=""> 
                   
						@endif
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label" for="year">
                        Year
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="year" id="year" placeholder="phone" value="{{$saleDetail->year}}" class="form-control">
                      </div>
                    </div>					
					 <input type="hidden" class="form-control" name="sale_id" id="sale_id" value="{{$saleDetail->id}}">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                        <button type="submit" class="btn btn-primary" >Update</button>
                   
                    <a class="btn btn-green" href="{{ url('admin/sale/index') }}">Back</a>
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



