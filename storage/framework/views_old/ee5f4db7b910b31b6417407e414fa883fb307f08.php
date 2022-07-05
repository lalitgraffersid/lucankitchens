<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>


<!--banner wrapper start-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="banner_wrapper">

<style>

.carousel-item img {

    max-width: 100%;
    height: 500px;
    min-height: 100%;
    object-fit: cover;

}

</style>
 <div id="demos2" class="carousel slide" data-ride="carousel">

         
          <ul class="carousel-indicators">
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li data-target="#demos2" data-slide-to="<?php echo e($key); ?>" class="<?php echo e($key == 0 ? 'active' : ''); ?>"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        
        
        <!-- The slideshow -->
        <div class="carousel-inner">
    
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  
      <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>" >
            <img src="http://lucankitchens.ie/admin/clip-one/assets/banner/banner/original/<?php echo e($banner->banner_image); ?>" alt="" >
           <div class="caption">
            <div class="container">
               <div class="row">
               <div class="col-md-12">
                     <h2>Exceptional Personalized
                        <span>Kitchens &amp; Wardrobes</span>
                     </h2>
                  </div>
               </div>
            </div>
         </div> 
          </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      
        </div>
    
    
    
    
        
        <!-- Left and right controls -->
        <!-- <a class="carousel-control-prev" href="#demo2" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo2" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a> -->
      </div>
     
      </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
     
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
                  <h1><span>KITCHENS</span></h1>
               </div>
               <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-md-4 wow fadeInUp">
                  <div class="gen_box">
                     <img src="<?php echo e(asset("/admin/clip-one/assets/gallery/original")); ?>/<?php echo e($p->gallery_image); ?>" alt="">
                     <h6><?php echo e($p->gallery_title); ?></h6>
                  </div>
               </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               


            </div>
         </div>
         </div>
         <!--inner wrapper end-->
      <!--bottom contact start-->
<?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>