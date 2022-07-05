<?php 
$current_route_name = Request::url();

$home = URL::to('/');
$about = URL::to('/about');
$services = URL::to('/services');
$projects = URL::to('/projects');
$sales = URL::to('/sales');
$machines_sale = URL::to('/machines_sale');
$testimonials = URL::to('/testimonials');
$contact = URL::to('/contact-us');
//echo $current_route_name; 
//die;
?>

<div class="header_wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="logo wow zoomIn" data-wow-duration="1s">
                     <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(asset('/frontend/images/logo.png')); ?>" alt="" /></a>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="topright">
                     <ul>
						<?php if($settings->home_phone): ?>
                        <li>
                           <i class="call"></i>
                           Call Us:<br>
                           
							   <?php echo e($settings->home_phone); ?>

						   
                        </li>
						<?php endif; ?>
						<?php if($settings->email): ?>
                        <li>
                           <i class="email"></i>
                           Email Us:<br>
                           <a href="<?php echo e($settings->home_phone); ?>"><?php echo e($settings->home_phone); ?></a>
                        </li>
						<?php endif; ?>
						<?php if($settings->home_phone): ?>
                        <li>
                           <i class="add"></i>
                           10 Coolmaghry Road,<br>
                           Donmaghmore,BT703HJ 
                        </li>
						<?php endif; ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--header wrapper end-->
      <!--banner wrapper start-->
	  <div class="banner_wrapper_inner">
	 <img src="<?php echo e(asset('/admin/clip-one/assets/page_banner/original')); ?>/<?php echo e($cms_data->page_banner); ?>" alt="<?php echo e($cms_data->page_title); ?>" >  
	 <div class="captioninner">
		<div class="container">
		    <h1><?php echo $cms_data->banner_description; ?></h1>
		</div>
	 </div>
</div>
      <!--banner wrapper end-->
      <!-- menu start -->
      <div class="topmenu">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                  <div class="main-menu">
                     <ul>
                        <li <?php if($current_route_name == $home): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
					   <li <?php if($current_route_name == $about): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/about">About Us</a></li>
					   <li <?php if($current_route_name == $projects): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/projects">Projects</a></li>
					  
					   <li <?php if($current_route_name == $machines_sale): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/machines_sale">Machines for sale</a></li>
					   <li <?php if($current_route_name == $services): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/services">Services</a></li>
					   <li <?php if($current_route_name == $testimonials): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/testimonials">Testimonials</a></li>
					   <li <?php if($current_route_name == $contact): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/contact-us">Contact Us</a></li>
					  
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>