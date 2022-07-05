<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

<!--banner wrapper start-->
      <div class="banner_wrapper_inner">
         <img src="<?php echo e(asset('/admin/clip-one/assets/page_banner/original')); ?>/<?php echo e($cms_data->page_banner); ?>" alt="<?php echo e($cms_data->page_title); ?>" > 
         <div class="captioninner">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <?php echo $cms_data->banner_description; ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
<!--banner wrapper end-->

<!--inner wrapper start-->
      <div class="inner_wrapper genpad">
         <!--service wrapper start-->
         <div class="service_wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h2><span>Our</span>
                        Services
                     </h2>
                  </div>
               </div>
               <?php if(!empty($cms_data->page_description)): ?>  
					<?php echo $cms_data->page_description; ?> 
				<?php endif; ?>

            </div>
         </div>
         <!--service wrapper end-->
      </div>
      <!--inner wrapper end-->
      <!--bottom contact start-->
		<?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>