<?php 
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
?>

<div class="header_wrapper">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="logo wow zoomIn" data-wow-duration="1s">
                     <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(asset('/frontend/images/logo.png')); ?>" alt="" /></a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="topsocial">
					<?php if($settings->facebook): ?>
					<a href="<?php echo e($settings->facebook); ?>" style="display: none;"><i class="fab fa-facebook-f"></i></a>
					<?php endif; ?>
					<?php if($settings->instagram): ?>
                     <a href="<?php echo e($settings->instagram); ?>"><i class="fab fa-instagram"></i></a>
					<?php endif; ?>
					<?php if($settings->googleplus): ?>
                     <a href="<?php echo e($settings->googleplus); ?>"><i class="fab fa-google-plus-g"></i></a>
					<?php endif; ?>
					<?php if($settings->pinterest): ?>
                     <a href="<?php echo e($settings->pinterest); ?>"><i class="fab fa-pinterest-p"></i></a>
					<?php endif; ?>
               <a href="https://www.houzz.ie/professionals/kitchen-designers-and-fitters/lucan-kitchen-and-wardrobe-centre-pfvwie-pf~666304652" target="_blank"><i><img src="<?php echo e(asset('/frontend/images/houzz2.png')); ?>" alt=""></i></a>
                  </div>
                  <!-- menu start -->
                  <div class="topmenu">
                     <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                     <div class="main-menu">
                        <ul>
                           <li <?php if($current_route_name == $home): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
						   <li <?php if($current_route_name == $about): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/about">About Us</a></li>
                           <li <?php if($current_route_name == $kitchens): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/kitchens">Kitchens</a></li>
						   <li <?php if($current_route_name == $wardrobes): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/wardrobes">Wardrobes</a></li>
                     <li <?php if($current_route_name == $interiors): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/interiors">Interiors</a></li>
						   <li <?php if($current_route_name == $faq): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/faq">FAQ</a></li>
						   <li <?php if($current_route_name == $planners): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/planners">Planner</a></li>
						   <li <?php if($current_route_name == $bespoke): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/bespoke">Bespoke Gallery</a></li>
						   <li <?php if($current_route_name == $contact): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/contact-us">Contact Us</a></li>

                        </ul>
                     </div>
                  </div>
                  <!-- menu end -->
               </div>
            </div>
         </div>
      </div>