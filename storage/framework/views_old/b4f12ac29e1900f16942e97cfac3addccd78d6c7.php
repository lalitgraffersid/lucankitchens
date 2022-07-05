<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

<!--about wrapper start-->
      <div class="about_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 wow fadeInUp">
				<?php if(!empty($cms_data->content_banner)): ?>
					<div class="abt_pic">
					<img src="<?php echo e(asset('/admin/clip-one/assets/page_banner/original')); ?>/<?php echo e($cms_data->content_banner); ?>" alt="" />
					</div>
				<?php endif; ?> 
                  
               </div>
               <div class="col-lg-5 wow fadeInUp">
                <?php if(!empty($cms_data->page_description)): ?>  
					<?php echo $cms_data->page_description; ?> 
				<?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--bottom contact start-->
		<?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>