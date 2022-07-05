<?php 
$current_route_name = Request::url();

$home = URL::to('/');
$about = URL::to('/about');
$services = URL::to('/services');
$products = URL::to('/products');
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
			  <!-- menu start -->
			  <div class="topmenu">
				 <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
				 <div class="main-menu">
					<ul>
					  
					   <li <?php if($current_route_name == $home): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
					   <li <?php if($current_route_name == $about): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/about">About Us</a></li>
						<li <?php if($current_route_name == $services): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/services">Services</a></li>
						<li <?php if($current_route_name == $products): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/products">Products</a></li>
						<li <?php if($current_route_name == $contact): ?> class="active" <?php endif; ?>"><a href="<?php echo e(URL::to('/')); ?>/contact-us">Contact Us</a></li>
					  
					</ul>
				 </div>
			  </div>
			  <!-- menu end -->
		   </div>
		</div>
	 </div>
</div>