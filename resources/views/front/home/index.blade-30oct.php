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
                     <img src="{{ asset('/frontend/images/about_thum_01.jpg') }}" alt="">
                     <img src="{{ asset('/frontend/images/about_sm_thum_01.jpg') }}" alt="" class="smthum">
                  </div>
               </div>
               <div class="col-md-6 wow fadeInUp">
                  <h1>About <span>Us</span></h1>
                  <p>Lucan Kitchen & Wardrobe Centre was established in 1982 by a brother and sister team at the rear of the family home, and for the last 30 years, our factory and showrooms have been located in the picturesque village of Lucan, on the banks of the River Liffey.<br>
                     We are a family-run company, and our success has been founded on providing a high-quality product and exceptional service, and our dedication to these ideals has seen the company grow to where it is today. Our purpose is to design and create fitted kitchens, bedrooms and living spaces that are both beautiful and functional. 
                  </p>
                  <p>The company is today synonymous with our professional sales and design team, our highly efficient fitting team, and our outstanding customer service. We have our own manufacturing facility, which is staffed by skilled craftsmen and backed up by modern technology to produce the highest standard of product. In addition, we have always sought to build strong relationships with our suppliers and source the best components and materials available when creating your dream kitchens and bedrooms.</p>
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
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <img src="{{ asset('/frontend/images/service_01.jpg') }}" alt="">
                     <h6>Kitchens</h6>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <img src="{{ asset('/frontend/images/service_02.jpg') }}" alt="">
                     <h6>Wardrobes</h6>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <img src="{{ asset('/frontend/images/service_03.jpg') }}" alt="">
                     <h6>Interiors</h6>
                  </div>
               </div>
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
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <img src="{{ asset('/frontend/images/project_01.jpg') }}" alt="">
                     <div class="txt">
                        <h6>Kitchens</h6>
                        <p>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <img src="{{ asset('/frontend/images/project_02.jpg') }}" alt="">
                     <div class="txt">
                        <h6>Kitchens & Wardrobes</h6>
                        <p>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <img src="{{ asset('/frontend/images/project_03.jpg') }}" alt="">
                     <div class="txt">
                        <h6>Interiors</h6>
                        <p>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                     </div>
                  </div>
               </div>
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