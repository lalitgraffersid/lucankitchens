@extends('front.layouts.innerpage')
@section('title', $cms_data->meta_title)
@section('description', $cms_data->meta_description)
@section('keywords', $cms_data->meta_keyword)
@section('content')

 <!--banner wrapper start-->
     <!--banner wrapper start-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="banner_wrapper">

<style>

.carousel-item img {

    max-width: 100%;
    height: 500px;
    min-height: 100%;
    object-fit: cover;

}

</style>
 <div id="demos2" class="carousel slide" data-ride="carousel">

         
          <ul class="carousel-indicators">
            @foreach($banners as $key => $banner)
            <li data-target="#demos2" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}"></li>
            @endforeach
          </ul>
        
        
        <!-- The slideshow -->
        <div class="carousel-inner">
    
    @foreach($banners as $key => $banner) 
  
      <div class="carousel-item {{$key == 0 ? 'active' : ''}}" >
            <img src="http://lucankitchens.ie/admin/clip-one/assets/banner/banner/original/{{$banner->banner_image}}" alt="" >
           <div class="caption">
            <div class="container">
               <div class="row">
               <div class="col-md-12">
                     <h2>Exceptional Personalized
                        <span>Kitchens &amp; Wardrobes</span>
                     </h2>
                  </div>
               </div>
            </div>
         </div> 
          </div>
@endforeach
      
      
        </div>
    
    
    
    
        
        <!-- Left and right controls -->
        <!-- <a class="carousel-control-prev" href="#demo2" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo2" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a> -->
      </div>
     
      </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
     
     <!--banner wrapper end-->
      <!--banner wrapper end-->
      <!--topconsultation start-->
      <div class="topconsultation">
         <div class="container">
            {!! $homeBoxDes !!}
         </div>
      </div>
      <!--topconsultation end-->
<!--inner wrapper start-->
      <div class="inner_wrapper genpad">
         <div class="container">
            <div class="row">               
               <div class="col-md-12 wow fadeInUp">
                  <h1>Kitchen <span>Planners</span></h1>

                  <p>Considering a new kitchen?  It???s important that your new kitchen includes everything to suit your lifestyle needs.</p>

                  <p>Do you love to cook? Is space an issue?</p> 

                  <p>Our Kitchen Planner is a useful tool to help you sketch out your dimensions and design your new space. You can also take a photo of your existing kitchen and bring it along too.</p> 

                  <p><strong>Some handy tips for using the planner:</strong></p>

                  <ul class="genlist">
                     <li>Roughly sketch out your room shape</li>
                     <li>Measure the length and width of your room</li>
                     <li>Measure the size of all windows</li>
                     <li>Measure the size, location and direction of the opening of all doors.</li>
                     <li>Sketch where your existing sink and cooker are, and indicate the position of gas, water, air vents and any electrical sockets.</li>
                     <li>Highlight any pillars, bulkheads etc</li>
                     <li>Include position and measurements of radiators/boilers</li>
                     <li>Please indicate on drawing exterior walls.</li>
                  </ul>

                  <p><a href="frontend/documents/lucan-planner.pdf" target="_blank" class="btn_pdf">Design your Kitchen</a></p>


               </div>
            </div>
         </div>
      </div>
      <!--inner wrapper end-->
      <!--bottom contact start-->
 @include('front/includes/contact')
	  

@endsection