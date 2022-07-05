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
                  <a href="#">
                    Home
                  </a>
                </li>
                <li class="active">
                  Banner
                </li>
                
              </ol>
              <div class="page-header">
                <div class="row">
                  <div class="col-md-10">
                    <h1>Banner <small>List </small></h1>
                  </div>
                  <div class="col-md-2">
                    <a class="btn btn-primary" href="{{ url('admin/banner/add') }}"><i class="fa fa-plus"></i>Add Banner</a>
                  </div>
                </div>
                    
              </div>
               @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message')}}</p>
              @endif
              <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
          </div>
          <!-- end: PAGE HEADER -->
          <!-- start: PAGE CONTENT -->
          <div class="row">
            <div class="col-md-12">
              <!-- start: DYNAMIC TABLE PANEL -->
             
              <div class="panel panel-default">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    @if (count($bannerDetails) > 0)
                    <tbody>

                      {{--*/ $i=0; /*--}}
                        @foreach ($bannerDetails as $banner)
                      {{--*/ $i++; /*--}}
                      <tr>
                        <td align="center">{{$banner->id }}</td>
                        <td>{{ $banner->banner_title }}</td>
                        <td>{{ $banner->type}}</td>
                        <td>{{ $banner->banner_description }}</td>
                        <td>
                        @if (!empty($banner->banner_image))
                        <img src="http://lucankitchens.ie/admin/clip-one/assets/banner/banner/thumbnail/{{$banner->banner_image}}" alt="">
                        @else
                        <img src="{{ asset("/admin/clip-one/assets/images/no-image-found.jpg") }}" alt="" height="100px" width="100px">
                        @endif
                        </td>
                        <td> 
                        @if($banner->status == 1) <a title="Status" href="{{ URL::route('banner_set_status',[$banner->id]) }}"  onclick="return confirm('Are you sure want to change status?')"> <span class="label label-success">Active</span></a> 
                        @elseif($banner->status == 0) <a title="Status" href="{{ URL::route('banner_set_status',[$banner->id]) }}"  onclick="return confirm('Are you sure want to change status?')"><span class="label label-danger">Inactive</span> </a> 
                        @endif 
                        </td>
                        
                        <td>
                          <a href="<?php echo \URL::route('banner.edit',$banner->id); ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                          <!-- <a href="<?php echo \URL::route('banner.view',$banner->id); ?>" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="View"><i class="fa fa-eye"></i></a> -->
                          <a href="<?php echo \URL::route('banner.delete',$banner->id); ?>" onclick="return confirm('Are you sure you want to delete banner?')" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                        </td>
                        
                      </tr>
                       @endforeach
                       
                    </tbody>
                     @endif
 
                  </table>
                </div>
              </div>
             
              
            </div>

              <!-- end: DYNAMIC TABLE PANEL -->
            </div>
          </div>
          
          <!-- end: PAGE CONTENT-->
        </div>
    <!-- end: MAIN CONTAINER -->
  
@endsection


@section('script')
<!--########## Java Script Start ##########-->

    <script type="text/javascript" src="{{ asset("/admin/clip-one/assets/plugins/DataTables/media/js/jquery.dataTables.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("/admin/clip-one/assets/plugins/DataTables/media/js/DT_bootstrap.js") }}"></script>
    <script src="{{ asset("/admin/clip-one/assets/js/table-data.js") }}"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
      jQuery(document).ready(function() {
        TableData.init();
      });
    </script>
 
@endsection