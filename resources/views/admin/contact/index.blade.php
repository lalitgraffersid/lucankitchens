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
                  Contact
                </li>
                
              </ol>
              <div class="page-header">
                <div class="row">
                  <div class="col-md-10">
                    <h1>CONTACT <small>List </small></h1>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>

                        
                      </tr>
                    </thead>
                    @if (count($contactDetails) > 0)
                    <tbody>
                      {{--*/ $i=0; /*--}}
                        @foreach ($contactDetails as $contact)
                      {{--*/ $i++; /*--}}
                      <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->message }}</td>
                        <td><a href="<?php echo \URL::route('contact.delete',$contact->id); ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
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
<!--########## Java Script End ############-->

@endsection

 

