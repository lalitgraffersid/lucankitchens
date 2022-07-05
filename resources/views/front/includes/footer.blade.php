<div class="footer_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-3 wow fadeInUp">
                  <div class="footer_box">
                     <h5 class="connect">About Company</h5>
                     <div class="list">
                        <div class="footer_logo"><a href="index.html"><img src="{{ asset('/frontend/images/footer_logo.png') }}" alt=""></a></div>
                        <p class="abttxt">Lucan kitchens was established in 1984 in the garage of the family home. The brother and sister team (Vincent and Gean) took care of the sales, manufacturing and the fitting together. It did not take them long to build their reputation for giving quality and value for money with a strong emphases on service.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 wow fadeInUp">
                  <div class="footer_box">
                     <h5>Contact Us</h5>
                     <div class="list">
                        <p><strong>Email:</strong> <a href="mailto:{{$settings->email}}">{{$settings->email}}</a><br>
                           <a href="mailto:ingrid@lucankitchens.ie">ingrid@lucankitchens.ie</a>
                        </p>
                        <p><strong>Address:</strong> {{$settings->address}}</p>
                        @if ($settings->home_phone)
                        <p><strong>Call:</strong>  {{$settings->home_phone}}</p>
                        @endif
                        <div class="social">
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
                           <a href="https://www.houzz.ie/professionals/kitchen-designers-and-fitters/lucan-kitchen-and-wardrobe-centre-pfvwie-pf~666304652" target="_blank"><i><img src="{{ asset('/frontend/images/houzz.png') }}" alt=""></i></a>
                        </div>

                      
                     </div>
                  </div>
               </div>
               <div class="col-md-3 wow fadeInUp">
                  <div class="footer_box">
                     <h5>Quick Navigation</h5>
                     <div class="list">
                        <ul>
						
							<li><a href="{{ URL::to('/') }}">Home</a></li>
							<li><a href="{{ URL::to('/') }}/about">About Us</a></li>
							<li><a href="{{ URL::to('/') }}/kitchens">Kitchens</a></li>
							<li><a href="{{ URL::to('/') }}/wardrobes">Wardrobes</a></li>
							<li><a href="{{ URL::to('/') }}/faq">FAQ</a></li>
							<li><a href="{{ URL::to('/') }}/planners">Planner</a></li>
							<li><a href="{{ URL::to('/') }}/bespoke">Bespoke Gallery</a></li>
							<li><a href="{{ URL::to('/') }}/contact-us">Contact Us</a></li>
							<li><a href="/frontend/documents/lucan-kitchens.pdf" target="_blank">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 wow fadeInUp">
                  <div class="footer_box">
                     <h5 class="connect">Facebook</h5>
                     <div class="list">
                        <div class="facebook_feed">
                           
                           <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2Fcategory%2FLocal-Service%2FLucan-Kitchen-Wardrobe-Centre-103002077740130%2F&tabs=timeline&width=280&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--footer wrapper end-->  
      <!--copy wrapper start-->
      <div class="copy_wrapper">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  &copy; 2019  Lucan Kitchens & Wardrobes. All rights reserved.
               </div>
               <div class="col-md-6 right">Site developed by <a href="https://dmcconsultancy.com/" target="_blank">DMC Consultancy</a></div>
            </div>
         </div>
      </div>
      <!--copy wrapper end-->
     
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('/frontend/js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>  
      <script src="{{ asset('/frontend/js/popper.min.js') }}" type="text/javascript"></script>    
      <script src="{{ asset('/frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('/frontend/js/wow.js') }}" type="text/javascript"></script>
      <script type="text/javascript" src="{{ asset('/frontend/js/owl.carousel.js') }}"></script>
      
	  <script src="{{ asset('/frontend/js/isotope.pkgd.min.js') }}"></script>
	  <script src="{{ asset('/frontend/js/custom.js') }}" type="text/javascript"></script>
   </body>
</html>