<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

 <!--banner wrapper start-->
      <div class="banner_wrapper_inner">    
            
         <img src="<?php echo e(asset('/frontend/images/inner_banner_02.jpg')); ?>" alt="">
         <div class="caption">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h2>Exceptional Personalized
                        <span>Kitchens & Wardrobes</span>
                     </h2>
                  </div>
               </div>
            </div>
         </div>                     
         
      </div>
      <!--banner wrapper end-->
      <!--topconsultation start-->
      <div class="topconsultation">
         <div class="container">
            <?php echo $homeBoxDes; ?>

         </div>
      </div>
      <!--topconsultation end-->
<!--inner wrapper start-->
      <div class="inner_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1><span>Kitchens</span></h1>
               </div>
               
               <div class="col-md-4 wow fadeInUp">
                  <div class="gen_box">
                     <img src="<?php echo e(asset('/frontend/images/kitchen_01.jpg')); ?>" alt="">
                     <h6>Kitchens</h6>
                  </div>
               </div>

               <div class="col-md-4 wow fadeInUp">
                  <div class="gen_box">
                     <img src="<?php echo e(asset('/frontend/images/kitchen_02.jpg')); ?>" alt="">
                     <h6>Kitchens</h6>
                  </div>
               </div>

               <div class="col-md-4 wow fadeInUp">
                  <div class="gen_box">
                     <img src="<?php echo e(asset('/frontend/images/kitchen_03.jpg')); ?>" alt="">
                     <h6>Kitchens</h6>
                  </div>
               </div>

               <div class="col-md-4 wow fadeInUp">
                  <div class="gen_box">
                     <img src="<?php echo e(asset('/frontend/images/kitchen_04.jpg')); ?>" alt="">
                     <h6>Kitchens</h6>
                  </div>
               </div>

               <div class="col-md-4 wow fadeInUp">
                  <div class="gen_box">
                     <img src="<?php echo e(asset('/frontend/images/kitchen_05.jpg')); ?>" alt="">
                     <h6>Kitchens</h6>
                  </div>
               </div>

               <div class="col-md-4 wow fadeInUp">
                  <div class="gen_box">
                     <img src="<?php echo e(asset('/frontend/images/kitchen_06.jpg')); ?>" alt="">
                     <h6>Kitchens</h6>
                  </div>
               </div>


            </div>
         </div>
         </div>
         <!--inner wrapper end-->
      <!--bottom contact start-->
 <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>