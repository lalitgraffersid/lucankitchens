@extends('front.layouts.innerpage')
@section('title', $cms_data->meta_title)
@section('description', $cms_data->meta_description)
@section('keywords', $cms_data->meta_keyword)
@section('content')

<!--about wrapper start-->
      <div class="about_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 wow fadeInUp">
				@if (!empty($cms_data->content_banner))
					<div class="abt_pic">
					<img src="{{ asset('/admin/clip-one/assets/page_banner/original')}}/{{$cms_data->content_banner}}" alt="" />
					</div>
				@endif 
                  
               </div>
               <div class="col-lg-5 wow fadeInUp">
                @if (!empty($cms_data->page_description))  
					{!! $cms_data->page_description !!} 
				@endif
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--bottom contact start-->
		@include('front/includes/contact')
      <!--bottom contact end-->
@endsection
