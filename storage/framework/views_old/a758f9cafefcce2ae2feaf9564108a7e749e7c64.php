<div class="slide">
	 <div class="owl-carousel owl-theme" id="product">
	 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="box">
		    <img src="<?php echo e(url('admin/clip-one/assets/gallery/original')); ?>/<?php echo e($product->gallery_image); ?>" alt=""/>
		   <h6><?php echo e($product->gallery_title); ?></h6>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	 </div>
</div>