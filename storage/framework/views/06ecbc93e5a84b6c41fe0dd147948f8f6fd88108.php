<?php $__env->startSection('content'); ?>
<div class="topconsultation">
         <div class="container">
		 <?php echo $homeBoxDes; ?>

         </div>
      </div>
      <!--topconsultation end-->
      <!--about wrapper start-->
      <div class="about_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-6 wow fadeInUp">
                  <div class="abt_pic">
                     <img src="<?php echo e(asset("admin/clip-one/assets/page_banner/original")); ?>/<?php echo e($about->content_banner); ?>" alt="">
                     <img src="<?php echo e(asset("admin/clip-one/assets/page_banner/thumbnail")); ?>/<?php echo e($about->content_banner); ?>" alt="" class="smthum">
                  </div>
               </div>
               <div class="col-md-6 wow fadeInUp">
                  <h1>About <span>Us</span></h1>
                  <p> <?php echo $about_page; ?></p>
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--service wrapper start-->
      <div class="service_wrapper genpad">
         <div class="container">

            <div class="row">
               <div class="col-md-12">
                  <h1>Our Specialization</h1>
               </div>

                <?php $__currentLoopData = $specials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
      <!--project wrapper start-->
      <div class="project_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Latest Projects</h1>
               </div>
               <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-md-4 wow fadeInUp">
                  <a href="<?php echo e(URL::to('/')); ?>/kitchens">
                  <div class="box">
                     <img src="<?php echo e(asset("/admin/clip-one/assets/gallery/original")); ?>/<?php echo e($p->gallery_image); ?>" alt="">
                     <div class="txt">
                        <h6><?php echo e($p->gallery_title); ?></h6>
                       <!--  <p>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
                     </div>
                     </a>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
         </div>
      </div>
      <!--project wrapper end-->
      <!--bottom contact start-->
       <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->
	  
	   <div id="privacy">This site uses cookies. Some of the cookies we use are essential for parts of the site to operate and have already been set.You may delete and block all cookies from this site, but parts of the site will not work.To find out more about cookies on this website, see our <a href="#" target="_blank">privacy policy</a>. I accept cookies from this site <a class="btn_privacy" onClick="myFunction()">I Agree</a></div>	  
      <script>
         function myFunction() {
             var x = document.getElementById("privacy");
             if (x.style.display === "none ") {
                 x.style.display = "block ";
             } else {
                 x.style.display = "none ";
             }
         }
      </script> 
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>