@php 
$current_route_name = Request::url();

$home = URL::to('/');
$about = URL::to('/about');
$kitchens = URL::to('/kitchens');
$wardrobes = URL::to('/wardrobes');
$faq = URL::to('/faq');
$planners = URL::to('/planners');
$bespoke = URL::to('/bespoke');
$contact = URL::to('/contact-us');
$interiors=URL::to('/interiors');
//echo $current_route_name; 
//die;
@endphp

<div class="header_wrapper">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="logo wow zoomIn" data-wow-duration="1s">
                     <a href="{{ URL::to('/') }}"><img src="{{ asset('/frontend/images/logo.png') }}" alt="" /></a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="topsocial">
					@if ($settings->facebook)
					<a href="{{$settings->facebook}}" style="display: none;"><i class="fab fa-facebook-f"></i></a>
					@endif
					@if ($settings->instagram)
                     <a href="{{$settings->instagram}}"><i class="fab fa-instagram"></i></a>
					@endif
					@if ($settings->googleplus)
                     <a href="{{$settings->googleplus}}"><i class="fab fa-google-plus-g"></i></a>
					@endif
					@if ($settings->pinterest)
                     <a href="{{$settings->pinterest}}"><i class="fab fa-pinterest-p"></i></a>
					@endif
               <a href="https://www.houzz.ie/professionals/kitchen-designers-and-fitters/lucan-kitchen-and-wardrobe-centre-pfvwie-pf~666304652" target="_blank"><i><img src="{{ asset('/frontend/images/houzz2.png') }}" alt=""></i></a>
                  </div>
                  <!-- menu start -->
                  <div class="topmenu">
                     <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                     <div class="main-menu">
                        <ul>
                           <li @if($current_route_name == $home) class="active" @endif"><a href="{{ URL::to('/') }}">Home</a></li>
						   <li @if($current_route_name == $about) class="active" @endif"><a href="{{ URL::to('/') }}/about">About Us</a></li>
                           <li @if($current_route_name == $kitchens) class="active" @endif"><a href="{{ URL::to('/') }}/kitchens">Kitchens</a></li>
						   <li @if($current_route_name == $wardrobes) class="active" @endif"><a href="{{ URL::to('/') }}/wardrobes">Wardrobes</a></li>
                     <li @if($current_route_name == $interiors) class="active" @endif"><a href="{{ URL::to('/') }}/interiors">Interiors</a></li>
						   <li @if($current_route_name == $faq) class="active" @endif"><a href="{{ URL::to('/') }}/faq">FAQ</a></li>
						   <li @if($current_route_name == $planners) class="active" @endif"><a href="{{ URL::to('/') }}/planners">Planner</a></li>
						   <li @if($current_route_name == $bespoke) class="active" @endif"><a href="{{ URL::to('/') }}/bespoke">Bespoke Gallery</a></li>
						   <li @if($current_route_name == $contact) class="active" @endif"><a href="{{ URL::to('/') }}/contact-us">Contact Us</a></li>

                        </ul>
                     </div>
                  </div>
                  <!-- menu end -->
               </div>
            </div>
         </div>
      </div>