<div class="banner_wrapper">
 <div class="owl-carousel owl-theme" id="slide">
 <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	<div class="slider">
	   <img src="<?php echo e(url('admin/clip-one/assets/banner/original')); ?>/<?php echo e($banner->banner_image); ?>" alt=""/>
	   <div class="caption">
		  <div class="container">
			 <div class="row">
				<div class="col-md-12">
				  
				   <?php echo $banner->banner_description; ?>

				</div>
			 </div>
		  </div>
	   </div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
</div>
