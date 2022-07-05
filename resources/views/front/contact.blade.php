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
            <div class="row">
<div class="col-md-4">
<div class="box">
<div class="icon"><img alt="" src="{{ asset('/frontend/images/icon_freecont.png') }}" /></div>

<h3>Free Consultation</h3>
<!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>--></div>
<p>&nbsp;</p>

</div>

<div class="col-md-4">
<div class="box">
<div class="icon"><img alt="" src="{{ asset('/frontend/images/icon_family.png') }}" /></div>

<h3>Family-Owned Business</h3>
<!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>--></div>
<p>&nbsp;</p>
</div>

<div class="col-md-4">
<div class="box">
<div class="icon"><img alt="" src="{{ asset('/frontend/images/icon_quality.png') }}" /></div>

<h3>High-Quality Craftsmanship</h3>
<!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>--></div>

<p>&nbsp;</p>
</div>
</div>
         </div>
      </div>
      <!--topconsultation end-->
      <!--contact wrapper start-->
      <div class="inner_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Contact <span>Us</span></h1>
               </div>
               <div class="col-md-6 contact_address">
                  <h3>Find <span>Us</span></h3>
                  

                  <h4>Address</h4>
                  <p>{{$settings->address}}</p>

                  <h4>Phone</h4>
                  <p>{{$settings->home_phone}}</p>

                  <h4>Email</h4>  
                  <p><a href="mailto:{{$settings->email}}">{{$settings->email}}</a></p>

                  <div class="map">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.0291972489485!2d-6.446094984651848!3d53.36063238134288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486772590c36efbd%3A0xf34f5936ffd52a49!2sLucan%20Kitchen%20%26%20Bedroom%20Specialist!5e0!3m2!1sen!2sin!4v1573378582997!5m2!1sen!2sin"></iframe>
                  </div>
                     
                  </div>
               </div>
               <div class="col-md-6 contact_form">
				   @if(Session::has('message'))
					<p class="alert alert-info">{{ Session::get('message') }}</p>
					@endif
                  <h3>Enquiry <span>Form</span></h3>
                  {!! Form::open(array('route' => 'contact.save','method'=>'POST', 'id' => 'contact', 'name' => 'contact', 'files' => true, 'enctype' => 'multipart/form-data')) !!}
                  <label>Name (required)</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                  <label>Email (required)</label>                    
                  <input type="email" class="form-control" id="email" name="email" required>
                  <label>Mobile (required)</label>                    
                  <input type="text" class="form-control" id="phone" name="phone" required>
                  <label>Enquiry About</label>
                  <input type="text" class="form-control" id="about" name="about">
                  <label>Address</label>
                  <input type="text" class="form-control" id="address" name="address">

                  <div class="row">
                     <div class="col-lg-6">
                        <label>City</label>
                        <input type="text" class="form-control" id="city" name="city">
                     </div>
                     <div class="col-lg-6">
                        <label>Country</label>
                       <input type="text" class="form-control" id="country" name="country">
                     </div>
                  </div>                
                                    
                  <label>Query Message</label>                     
                  <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                  <input name="" type="submit" value="Submit Query" class="btn_submit">
                  {!! Form::close() !!}
               </div>
            </div>
         </div>
         </div>
         <!--contact wrapper end-->
           
      <!--bottom contact start-->
       @include('front/includes/contact')
      <!--bottom contact end-->

@endsection