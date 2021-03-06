<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="banner_wrapper">


 <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://lucankitchens.ie/frontend/images/inner_banner.jpg" alt="" width="1100" height="500">
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


          <div class="carousel-item">
                <img src="https://lucankitchens.ie/frontend/images/inner_banner.jpg" alt="" width="1100" height="500">
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


          <div class="carousel-item">
                <img src="https://lucankitchens.ie/frontend/images/inner_banner.jpg" alt="" width="1100" height="500">
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
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      






         <div class="owl-carousel owl-theme" id="slide" style="display:none;">
		 @foreach($banners as $banner) 
            <div class="slider">
               <img src="{{ url('admin/clip-one/assets/banner/original') }}/{{ $banner->banner_image }}" alt=""/>
               <div class="caption">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           {!! $banner->banner_description !!}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			@endforeach
            
         </div>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>