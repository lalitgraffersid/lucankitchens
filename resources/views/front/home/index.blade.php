@extends('front.layouts.homepage')
@section('content')
<div class="topconsultation">
         <div class="container">
		 {!! $homeBoxDes !!}
         </div>
      </div>
      <!--topconsultation end-->
      <!--about wrapper start-->
      <div class="about_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-6 wow fadeInUp">
                  <div class="abt_pic">
                     <img src="{{ asset("admin/clip-one/assets/page_banner/original") }}/{{ $about->content_banner}}" alt="">
                     <img src="{{ asset("admin/clip-one/assets/page_banner/thumbnail") }}/{{ $about->content_banner}}" alt="" class="smthum">
                  </div>
               </div>
               <div class="col-md-6 wow fadeInUp">
                  <h1>About <span>Us</span></h1>
                  <p> {!! $about_page !!}</p>
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--service wrapper start-->
      <div class="service_wrapper genpad">
         <div class="container">

            <div class="row">
               <div class="col-md-12">
                  <h1>Our Specialization</h1>
               </div>

                @foreach($specials as $s)
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
      <!--project wrapper start-->
      <div class="project_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Latest Projects</h1>
               </div>
               @foreach($projects as $p)
               <div class="col-md-4 wow fadeInUp">
                  <a href="{{ URL::to('/') }}/kitchens">
                  <div class="box">
                     <img src="{{ asset("/admin/clip-one/assets/gallery/original") }}/{{$p->gallery_image}}" alt="">
                     <div class="txt">
                        <h6>{{$p->gallery_title}}</h6>
                       <!--  <p>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
                     </div>
                     </a>
                  </div>
               </div>
               @endforeach


            </div>
         </div>
      </div>
      <!--project wrapper end-->
      <!--bottom contact start-->
       @include('front/includes/contact')
      <!--bottom contact end-->
	  
	   <div id="privacy">This site uses cookies. Some of the cookies we use are essential for parts of the site to operate and have already been set.You may delete and block all cookies from this site, but parts of the site will not work.To find out more about cookies on this website, see our <a href="#" target="_blank">privacy policy</a>. I accept cookies from this site <a class="btn_privacy" onClick="myFunction()">I Agree</a></div>	  
      <script>
         function myFunction() {
             var x = document.getElementById("privacy");
             if (x.style.display === "none ") {
                 x.style.display = "block ";
             } else {
                 x.style.display = "none ";
             }
         }
      </script> 
      
@endsection