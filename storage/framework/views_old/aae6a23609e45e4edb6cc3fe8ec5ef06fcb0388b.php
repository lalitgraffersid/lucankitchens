<div class="footer_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-4 wow fadeInUp">
                  <div class="footer_box">
                     <h5 class="connect">About Company</h5>
                     <div class="list">
                        <div class="footer_logo"><a href="index.html"><img src="<?php echo e(asset('/frontend/images/footer_logo.png')); ?>" alt=""></a></div>
                        <p class="abttxt">Lucan kitchens was established in 1984 in the garage of the family home. The brother and sister team (Vincent and Gean) took care of the sales, manufacturing and the fitting together. It did not take them long to build their reputation for giving quality and value for money with a strong emphases on service.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="footer_box">
                     <h5>Contact Us</h5>
                     <div class="list">
                        <p><strong>Email:</strong> <a href="mailto:info@lucankitchens.ie">info@lucankitchens.ie</a></p>
                        <p><strong>Address:</strong> Unit 9, Hills Industrial Estate, Lucan Co. Dublin</p>
                        <p><strong>Call:</strong>  (01) 628 0475</p>
                        <div class="social">
						<?php if($settings->facebook): ?>
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
					   <?php endif; ?>
					   <?php if($settings->instagram): ?>
                           <a href="#"><i class="fab fa-instagram"></i></a>
					   <?php endif; ?>
					   <?php if($settings->googleplus): ?>
                           <a href="#"><i class="fab fa-google-plus-g"></i></a> 
						<?php endif; ?>
						<?php if($settings->pinterest): ?>
                           <a href="#"><i class="fab fa-pinterest-p"></i></a>
					   <?php endif; ?>
                        </div>
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
							<li><a href="<?php echo e(URL::to('/')); ?>/kitchens">Kitchens</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/wardrobes">Wardrobes</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/faq">FAQ</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/planners">Planner</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/bespoke">Bespoke Gallery</a></li>
							<li><a href="<?php echo e(URL::to('/')); ?>/contact-us">Contact Us</a></li>
							<li><a href="#">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--footer wrapper end-->  
      <!--copy wrapper start-->
      <div class="copy_wrapper">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  &copy; 2019  Lucan Kitchens & Wardrobes. All rights reserved.
               </div>
               <div class="col-md-6 right">Site developed by <a href="http://dmcconsultancy.com/" target="_blank">DMC Consultancy</a></div>
            </div>
         </div>
      </div>
      <!--copy wrapper end-->
     
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo e(asset('/frontend/js/jquery-3.3.1.min.js')); ?>" type="text/javascript"></script>  
      <script src="<?php echo e(asset('/frontend/js/popper.min.js')); ?>" type="text/javascript"></script>    
      <script src="<?php echo e(asset('/frontend/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('/frontend/js/wow.js')); ?>" type="text/javascript"></script>
      <script type="text/javascript" src="<?php echo e(asset('/frontend/js/owl.carousel.js')); ?>"></script>
      
	  <script src="<?php echo e(asset('/frontend/js/isotope.pkgd.min.js')); ?>"></script>
	  <script src="<?php echo e(asset('/frontend/js/custom.js')); ?>" type="text/javascript"></script>
   </body>
</html>