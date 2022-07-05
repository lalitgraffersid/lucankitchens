<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>
<!--service wrapper start-->
      <div class="inner_service genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Our Services</h2>
               </div>
            </div>
            <?php echo $cms_data->page_description; ?> 
         </div>
      </div>
      <!--service wrapper end-->
      <!--bottom contact start-->
		<?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>