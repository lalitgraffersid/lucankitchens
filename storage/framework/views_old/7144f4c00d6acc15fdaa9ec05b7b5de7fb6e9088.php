<?php $__env->startSection('content'); ?>
	<div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="about_wrapper">
                  <div class="row">
                     <div class="col-md-5 wow fadeInUp">
                        <div class="pic wow fadeInUp">
					<img src="<?php echo e(asset('/admin/clip-one/assets/page_banner/original')); ?>/<?php echo e($about->content_banner); ?>" alt="<?php echo e($about->page_title); ?>" >  
						</div>
                     </div>
                     <div class="col-md-7 wow fadeInUp">
                        <!-- <h2><span>Introduce</span>
                           M-Tech Solutions
                        </h2> -->
                        <?php echo $about_page; ?>

						<a href="<?php echo e(URL::to('/')); ?>/about" class="btn_more1">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--service wrapper start-->
      <?php echo $service_page; ?>

      <!--service wrapper end-->
      <!--product wrapper start-->
      <div class="product_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="wow fadeInUp"><span>Our</span>Latest Products</h2>
                 <?php echo $__env->make('front/includes/product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               </div>
            </div>
         </div>
      </div>
      <!--product wrapper end-->
      <!--bottom contact start-->
	  <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>