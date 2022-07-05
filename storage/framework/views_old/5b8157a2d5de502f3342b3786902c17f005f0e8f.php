<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

 <!--banner wrapper start-->
      <div class="banner_wrapper_inner">    
            
         <img src="<?php echo e(asset('/frontend/images/inner_banner.jpg')); ?>" alt="">
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
               <div class="col-md-12 wow fadeInUp">
                  <h1>Bespoke <span>Gallery</span></h1>
               </div>
               <div class="col-md-12">
                  <div class="gallery_list">
                     <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".kitchens">Kitchens</button>
                        <button data-filter=".wardrobes">Wardrobes</button>
                        <button data-filter=".doors">Bespoke doors</button>
                        <button data-filter=".covers">Radiator Covers</button>
                        <button data-filter=".interior">Interior</button>                   
                     </div>
                  </div>
                  <div class="grid">
                     <div class="box wardrobes">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_01.jpg')); ?>" alt="">
                        <h6>Wardrobes</h6>
                     </div>
                     <div class="box kitchens">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_02.jpg')); ?>" alt="">
                        <h6>kitchen</h6>
                     </div>
                     <div class="box interior">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_03.jpg')); ?>" alt="">
                        <h6>Interior</h6>
                     </div>
                     <div class="box covers">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_04.jpg')); ?>" alt="">
                        <h6>Radiator Covers</h6>
                     </div>
                     <div class="box doors">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_05.jpg')); ?>" alt="">
                        <h6>Bespoke doors</h6>
                     </div>
                     <div class="box wardrobes">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_06.jpg')); ?>" alt="">
                        <h6>Wardrobes</h6>
                     </div>
                     <div class="box kitchens">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_07.jpg')); ?>" alt="">
                        <h6>kitchen</h6>
                     </div>
                     <div class="box wardrobes">
                       <img src="<?php echo e(asset('/frontend/images/gallery_thum_08.jpg')); ?>" alt="">
                        <h6>Wardrobes</h6>
                     </div>
                     <div class="box doors">
                        <img src="<?php echo e(asset('/frontend/images/gallery_thum_09.jpg')); ?>" alt="">
                        <h6>Bespoke doors</h6>
                     </div>
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