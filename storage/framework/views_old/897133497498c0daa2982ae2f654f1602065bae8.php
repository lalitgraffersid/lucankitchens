<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

<!--banner wrapper start-->
      <div class="banner_wrapper_inner">
         <img src="<?php echo e(asset('/admin/clip-one/assets/page_banner/original')); ?>/<?php echo e($cms_data->page_banner); ?>" alt="<?php echo e($cms_data->page_title); ?>" > 
         <div class="captioninner">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                      <?php echo $cms_data->banner_description; ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
<!--banner wrapper end-->
      <!--inner wrapper start-->
      <div class="inner_wrapper genpad">
         <!--contact wrapper start-->
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2><span>Our</span>
                     Contact Information
                  </h2>
               </div>
               <div class="col-md-6 contact_address">
                  <ul>
                     <li><i><img src="public/frontend/images/contact_icon_01.png" /></i><a href="mailto:<?php echo e($settings->email); ?>"><?php echo e($settings->email); ?></a></li>
                     <li><i><img src="public/frontend/images/contact_icon_02.png" /></i><?php echo e($settings->address); ?>

                     </li>
                     <li><i><img src="public/frontend/images/contact_icon_03.png" /></i><?php echo e($settings->home_phone); ?></li>
                  </ul>
               </div>
               <div class="col-md-6 contact_form">
				<h3>Send us a <span>Message</span></h3>
				<?php if(Session::has('message')): ?>
					<p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>
				<?php endif; ?>
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
         <!--contact wrapper end-->
      </div>
      <!--inner wrapper end-->
      <!--bottom contact start-->
      <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>