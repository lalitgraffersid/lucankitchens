@extends('front.layouts.innerpage')
@section('title', $cms_data->meta_title)
@section('description', $cms_data->meta_description)
@section('keywords', $cms_data->meta_keyword)
@section('content')

 <!--banner wrapper start-->
      <div class="banner_wrapper_inner">    
            
         <img src="{{ asset("admin/clip-one/assets/page_banner/original") }}/{{ $cms_data->page_banner}}" alt="">
         <div class="caption">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h2>Exceptional Personalized
                        <span>Kitchens & Wardrobes</span>
                     </h2>
                  </div>
               </div>
            </div>
         </div>                     
         
      </div>
      <!--banner wrapper end-->
      <!--topconsultation start-->
      <div class="topconsultation ">
         <div class="container">
            {!! $homeBoxDes !!}
         </div>
      </div>
      <!--topconsultation end-->
      <!--about wrapper start-->
      <div class="about_wrapper genpad aboutbox">
         <div class="container">
            <div class="row">
               <div class="col-md-6 wow fadeInUp">
                  <div class="abt_pic">
                     <img src="{{ asset("admin/clip-one/assets/page_banner/original") }}/{{ $cms_data->content_banner}}" alt="">
                     <img src="{{ asset("admin/clip-one/assets/page_banner/thumbnail") }}/{{ $cms_data->content_banner}}" alt="" class="smthum">
                  </div>
               </div>
               <div class="col-md-6 wow fadeInUp">
                   @if (!empty($cms_data->page_description))  
					{!! $cms_data->page_description !!} 
				@endif
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--service wrapper start-->
      <div class="service_wrapper inner genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Our Specialization</h1>
               </div>
               @foreach($special as $s)
               <div class="col-md-4 wow fadeInUp">
                 <a href="{{ URL::to('/') }}/{{$s->url}}">
                  <div class="box">
                      <img src="{{ asset("/admin/clip-one/assets/banner/banner/original") }}/{{ $s->special_image }}" alt="">
                     <h6>{{$s->special_title}}</h6>
                  </div>
                  </a>
                 
               </div>
                @endforeach
              
              
            </div>
         </div>
      </div>
      <!--service wrapper end-->
      
      <!--bottom contact start-->
 @include('front/includes/contact')
	  

@endsection