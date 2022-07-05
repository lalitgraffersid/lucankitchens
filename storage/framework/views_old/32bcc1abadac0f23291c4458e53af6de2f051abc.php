<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

<!--contact wrapper start-->
      <div class="contact_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-4 wow fadeInUp">
                  <div class="icon"><img src="frontend/images/contact_icon_01.png" alt=""></div>
                  <h4>Phone Number</h4>
                  <p><?php echo e($settings->home_phone); ?></p>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="icon"><img src="frontend/images/contact_icon_02.png" alt=""></div>
                  <h4>Email Address</h4>
                  <p><a href="mailto:<?php echo e($settings->email); ?>"><?php echo e($settings->email); ?></a></p>
               </div>
               <div class="col-md-4 wow fadeInUp">
                  <div class="icon"><img src="frontend/images/contact_icon_03.png" alt=""></div>
                  <h4>Location</h4>
                  <p>10 Coolmaghry Road,<br> 
                     Donmaghmore, BT703HJ
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!--contact wrapper end-->
      <!--contact form start-->
      <div class="contact_form genpad">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 offset-lg-3 wow fadeInUp">
                  <h3>GET IN TOUCH WITH US</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                  <?php echo Form::open(array('route' => 'contact.save','method'=>'POST', 'id' => 'contact', 'name' => 'contact', 'files' => true, 'enctype' => 'multipart/form-data')); ?>

                  <div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="form-group">
						<label for="ph">Phone Number</label>
						<input type="text" class="form-control" id="phone" name="phone" required>
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="message">Comment</label>
						<textarea class="form-control" rows="5" id="message" name="message" required></textarea>
					</div>
					<button type="submit" class="btn_submit"><span>Submit</span></button>
			   <?php echo Form::close(); ?>

               </div>
            </div>
         </div>
      </div>
      <!--contact form end-->
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>