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
 <div id="demos" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <?php
          $i=0;
          ?>
          @foreach($banners as $banner) 
        
          <li data-target="#demos" data-slide-to="{{$i++}}" <?php if($banner->id==1){?>class="active" <?php }?>></li>
          
          @endforeach
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
		
		@foreach($banners as $banner) 
	
		  <div <?php if($banner->id==1){?>class="carousel-item active" <?php }else{?>class="carousel-item"<?php }?> >
            <img src="http://lucankitchens.com/admin/clip-one/assets/banner/banner/original/{{$banner->banner_image}}" alt="" >
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

       <div class="carousel-item">
                <img src="https://lucankitchens.com/frontend/images/inner_banner.jpg" alt="">
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
                <img src="https://lucankitchens.com/frontend/images/inner_banner.jpg" alt="" >
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