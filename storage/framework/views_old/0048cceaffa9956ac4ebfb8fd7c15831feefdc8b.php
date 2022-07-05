<?php $__env->startSection('content'); ?>
<!--about wrapper start-->
      <div class="about_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 wow fadeInUp">
                  <h2>About us</h2>
               </div>
               <div class="col-lg-9 wow fadeInUp">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>
                  <a href="about" class="btn_more1">More Information</a>
               </div>
            </div>
         </div>
      </div>
      <!--about wrapper end-->
      <!--project wrapper start-->
      <div class="project_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 wow fadeInUp">
                  <h2>Our projects
                     <span>& missions</span>
                  </h2>
               </div>
			    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <div class="col-lg-3 wow fadeInUp">
                  <div class="pic">
				 <img src="<?php echo e(url('admin/clip-one/assets/gallery/original')); ?>/<?php echo e($project->gallery_image); ?>" alt="<?php echo e($project->gallery_title); ?>">
				  </div>
                  <h6><?php echo e($project->gallery_title); ?></h6>
                  <p><?php echo e($project->description); ?></p>
               </div>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               <div class="col-md-12"><a href="projects" class="btn_more1">More Information</a></div>
            </div>
         </div>
      </div>
      <!--project wrapper end-->
      <!--service wrapper start-->
      <div class="service_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 wow fadeInUp">
                  <h2>WHAT WE 
                     <span>can offer</span>
                  </h2>
               </div>
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-lg-6 wow fadeInUp">
                        <div class="box">
                           <i><img src="<?php echo e(asset('/frontend/images/service_icon_01.png')); ?>" alt=""></i>
                           <h3>Reduction of Green House Gasses</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                        </div>
                     </div>
                     <div class="col-lg-6 wow fadeInUp">
                        <div class="box">
                           <i><img src="<?php echo e(asset('/frontend/images/service_icon_02.png')); ?>" alt=""></i>
                           <h3>Reduction of Ecological Footprint</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6 wow fadeInUp">
                        <div class="box">
                           <i><img src="<?php echo e(asset('/frontend/images/service_icon_03.png')); ?>" alt=""></i>
                           <h3>Reduction in Chemical Use</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                        </div>
                     </div>
                     <div class="col-lg-6 wow fadeInUp">
                        <div class="box">
                           <i><img src="<?php echo e(asset('/frontend/images/service_icon_04.png')); ?>" alt=""></i>
                           <h3>Supirior Energy Efficiency</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12"><a href="services" class="btn_more1">More Information</a></div>
            </div>
         </div>
      </div>
      <!--service wrapper end-->
      <!--client wrapper start-->
      <div class="client_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 wow fadeInUp">
                  <h2>WHAT OUR 
                     <span>CLIENT SAY'S</span>
                  </h2>
               </div>
               <div class="col-lg-9">
                  <div class="owl-carousel owl-theme" id="client">
				  <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                     <div class="client_box">
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
	  
      </div>
      </div>
      </div>
      <!--client wrapper end-->
      <!--bottom contact start-->
      <div class="bottom_contact">
         <div class="container ">
            <div class="row">
               <div class="col-md-8 wow fadeInUp">
                  <h3>Do you have any question?</h3>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <a href="contactus.html" class="btn_contact">CONTACT US</a>
               </div>
            </div>
         </div>
      </div>
	  
	  <div id="privacy">This site uses cookies. Some of the cookies we use are essential for parts of the site to operate and have already been set.You may delete and block all cookies from this site, but parts of the site will not work.To find out more about cookies on this website, see our <a href="#" target="_blank">privacy policy</a>. I accept cookies from this site <a class="btn_privacy" onClick="myFunction() ">I Agree</a></div>	  
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