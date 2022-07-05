<div class="footer_wrapper genpad">
         <div class="container ">
            <div class="row">
               <div class="col-md-4 wow fadeInUp ">
                  <div class="footer_box">
                     <h5 class="connect">About Company</h5>
                     <div class="list">
                        <div class="footer_logo"><img src="frontend/images/logo.png" alt=""></div>
                        <p class="abttxt">We provide machinery for mining that helps reduce a company carbon footprint - eco-friendly energy conscious mining equipment. 
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="footer_box">
                     <h5>Contact Us</h5>
                     <div class="list">
                        <p class="addtxt"><i class="email"></i><a href="mailto:<?php echo e($settings->email); ?>"><?php echo e($settings->email); ?></a></p>
                        <p class="addtxt"><i class="address"></i>10 Coolmaghry Road,<br>
                           Donmaghmore, BT703HJ
                        </p>
                        <p class="addtxt"><i class="phone"></i><?php echo e($settings->home_phone); ?></p>
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
                           <li><a href="<?php echo e(URL::to('/')); ?>/projects">Projects</a></li>
                           <li><a href="<?php echo e(URL::to('/')); ?>/services">Services</a></li>
                          
                           <li><a href="<?php echo e(URL::to('/')); ?>/machines_sale">Machines for sale</a></li>
                           <li><a href="<?php echo e(URL::to('/')); ?>/testimonials">Testimonials</a></li>
                           <li><a href="<?php echo e(URL::to('/')); ?>/contact-us">Contact Us</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                        </ul>
							
                        <div class="social">
                           <?php if($settings->facebook): ?>
							<a href="<?php echo e($settings->facebook); ?>"><i class="fab fa-facebook-f"></i></a>
							<?php endif; ?>
							<?php if($settings->twitter): ?>
							<a href="<?php echo e($settings->twitter); ?>"><i class="fab fa-twitter"></i></a>
							<?php endif; ?>
							<?php if($settings->linkedin): ?>
							<a href="<?php echo e($settings->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a>
							<?php endif; ?>
							<?php if($settings->instagram): ?>
							<a href="<?php echo e($settings->instagram); ?>"><i class="fab fa-instagram"></i></a>
							<?php endif; ?>
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
                  &copy; 2019  ECMS. All rights reserved.
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