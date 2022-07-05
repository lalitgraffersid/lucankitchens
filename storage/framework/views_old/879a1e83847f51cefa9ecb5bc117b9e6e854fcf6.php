<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

<!--inner project wrapper start-->
      <div class="inner_project genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 <?php echo $cms_data->page_description; ?>

               </div>
            </div>
            <div class="row">
			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <div class="pic">
					<img src="<?php echo e(url('admin/clip-one/assets/gallery/original')); ?>/<?php echo e($product->gallery_image); ?>" alt="<?php echo e($product->gallery_title); ?>">
					 </div>
                     <div class="txt">
                        <h5><?php echo e($product->gallery_title); ?></h5>
                        <p><?php echo e($product->description); ?></p>
                     </div>
                  </div>
               </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
            
         </div>
      </div>
      <!--inner project wrapper end-->
	   <!--bottom contact start-->
	  
	  <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	   <!--bottom contact end-->
	   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>