<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

 <!--banner wrapper start-->
      <div class="banner_wrapper_inner">    
            
         <img src="<?php echo e(asset("admin/clip-one/assets/page_banner/original")); ?>/<?php echo e($cms_data->page_banner); ?>" alt="">
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
      <div class="topconsultation ">
         <div class="container">
            <?php echo $homeBoxDes; ?>

         </div>
      </div>
      <!--topconsultation end-->
      <!--about wrapper start-->
      <div class="about_wrapper genpad aboutbox">
         <div class="container">
            <div class="row">
               <div class="col-md-6 wow fadeInUp">
                  <div class="abt_pic">
                     <img src="<?php echo e(asset("admin/clip-one/assets/page_banner/original")); ?>/<?php echo e($cms_data->content_banner); ?>" alt="">
                     <img src="<?php echo e(asset("admin/clip-one/assets/page_banner/thumbnail")); ?>/<?php echo e($cms_data->content_banner); ?>" alt="" class="smthum">
                  </div>
               </div>
               <div class="col-md-6 wow fadeInUp">
                   <?php if(!empty($cms_data->page_description)): ?>  
					<?php echo $cms_data->page_description; ?> 
				<?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--service wrapper start-->
      <div class="service_wrapper inner genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Our Specialization</h1>
               </div>
               <?php $__currentLoopData = $special; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-md-4 wow fadeInUp">
                 <a href="<?php echo e(URL::to('/')); ?>/<?php echo e($s->url); ?>">
                  <div class="box">
                      <img src="<?php echo e(asset("/admin/clip-one/assets/banner/banner/original")); ?>/<?php echo e($s->special_image); ?>" alt="">
                     <h6><?php echo e($s->special_title); ?></h6>
                  </div>
                  </a>
                 
               </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              
            </div>
         </div>
      </div>
      <!--service wrapper end-->
      
      <!--bottom contact start-->
 <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>