<div class="footer_wrapper">
         <div class="container ">
            <div class="row">
               <div class="col-md-4 wow fadeInUp ">
                  <div class="footer_box">
                     <h5 class="connect">About Company</h5>
                     <div class="list">
                        <div class="footer_logo"><img src="<?php echo e(asset('/frontend/images/footer_logo.png')); ?>" alt=""></div>
                        <p class="abttxt">M-TECH SOLUTIONS SPECIALISE IN FAULT DIAGNOSIS AND REPAIR OF ELECTRICAL SYSTEMS ON CRUSHING AND SCREENING APPLICATIONS AND MANUFACTURE OF CONTROL SYSTEMS.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="footer_box">
                     <h5>Contact Us</h5>
                     <div class="list">
						<?php if($settings->email): ?>
							<p class="addtxt"><i class="email"></i><a href="mailto:<?php echo e($settings->email); ?>"><?php echo e($settings->email); ?></a></p>
						<?php endif; ?>
						<?php if($settings->address): ?>
                        <p class="addtxt"><i class="address"></i><?php echo e($settings->address); ?>

                        </p>
						<?php endif; ?>
						<?php if($settings->home_phone): ?>
						<p class="addtxt"><i class="phone"></i><?php echo e($settings->home_phone); ?></p>
						<?php endif; ?>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="footer_box">
                     <h5>Quick Navigation</h5>
                     <div class="list">
                        <ul>
						
							<li><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/about">About Us</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/services">Services</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/products">Products</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/contact-us">Contact Us</a></li>
							<li><a href="https://mtechireland.com/public/frontend/pdf/Mtech-privacy.pdf" target="_blank">Privacy Policy</a></li>
                           
                        </ul>
                        <div class="social">
						<ul>
							<?php if($settings->facebook): ?>
							<li><a href="<?php echo e($settings->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
							<?php endif; ?>
							<?php if($settings->twitter): ?>
							<li><a href="<?php echo e($settings->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
							<?php endif; ?>
							<?php if($settings->linkedin): ?>
							<li><a href="<?php echo e($settings->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a></li>
							<?php endif; ?>
							<?php if($settings->instagram): ?>
							<li><a href="<?php echo e($settings->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
							<?php endif; ?>
							</ul>
							
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--footer wrapper end-->  
      <!--copy wrapper start-->
      <div class="copy_wrapper ">
         <div class="container ">
            <div class="row ">
               <div class="col-md-6">
                  &copy; 2019  M-Tech Solutions . All rights reserved.
               </div>
               <div class="col-md-6 right">Site developed by <a href="http://dmcconsultancy.com/ " target="_blank ">DMC Consultancy</a></div>
            </div>
         </div>
      </div>
      <!--copy wrapper end-->
      
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo e(asset('/frontend/js/jquery-3.3.1.min.js')); ?>" type="text/javascript "></script>  
      <script src="<?php echo e(asset('/frontend/js/popper.min.js')); ?>" type="text/javascript "></script>    
      <script src="<?php echo e(asset('/frontend/js/bootstrap.min.js')); ?>" type="text/javascript "></script>
      <script src="<?php echo e(asset('/frontend/js/wow.js')); ?>" type="text/javascript "></script>
      <script type="text/javascript " src="<?php echo e(asset('/frontend/js/owl.carousel.js')); ?>"></script>   
      <script type="text/javascript " src="<?php echo e(asset('/frontend/js/html5lightbox.js')); ?>"></script>  
      <script src="<?php echo e(asset('/frontend/js/custom.js')); ?>" type="text/javascript "></script>
 
   </body>
</html>