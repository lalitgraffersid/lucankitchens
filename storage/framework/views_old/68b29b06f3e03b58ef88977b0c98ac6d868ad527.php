<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

<!--testimonials wrapper start-->
      <div class="testimonials genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <?php echo $cms_data->page_description; ?>

               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-theme" id="testi">
				  <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                     <div class="box">
                        <div class="header">
                           <div class="pic">
						   <img src="<?php echo e(url('admin/clip-one/assets/testimonial/original')); ?>/<?php echo e($testimonial->profile_image); ?>" alt="<?php echo e($testimonial->name); ?>">
						   </div>
                           <?php echo e($testimonial->name); ?>

                           <span><?php echo e($testimonial->degination); ?></span>
                        </div>
                        <p><?php echo e($testimonial->description); ?></p>
                     </div>
                     
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--testimonials wrapper end-->
      <!--bottom contact start-->
		<?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>