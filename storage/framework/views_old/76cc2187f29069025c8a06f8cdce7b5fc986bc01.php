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
            <div class="row">
               <div class="col-md-4">
                  <div class="box">
                     <div class="icon"><img src="images/icon_freecont.png" alt=""></div>
                     <h3>Free Consultation</h3>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box">
                     <div class="icon"><img src="images/icon_family.png" alt=""></div>
                     <h3>Family-Owned Business</h3>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box">
                     <div class="icon"><img src="images/icon_quality.png" alt=""></div>
                     <h3>High-Quality Craftsmanship</h3>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--topconsultation end-->
      <!--contact wrapper start-->
      <div class="inner_wrapper genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Contact <span>Us</span></h1>
               </div>
               <div class="col-md-6 contact_address">
                  <h3>Find <span>Us</span></h3>
                  

                  <h4>Address</h4>
                  <p><?php echo e($settings->address); ?></p>

                  <h4>Phone</h4>
                  <p><?php echo e($settings->home_phone); ?></p>

                  <h4>Email</h4>  
                  <p><a href="mailto:<?php echo e($settings->email); ?>"><?php echo e($settings->email); ?></a></p>

                  <div class="map">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.0291972489485!2d-6.446094984651848!3d53.36063238134288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486772590c36efbd%3A0xf34f5936ffd52a49!2sLucan%20Kitchen%20%26%20Bedroom%20Specialist!5e0!3m2!1sen!2sin!4v1573378582997!5m2!1sen!2sin"></iframe>
                  </div>
                     
                  </div>
               </div>
               <div class="col-md-6 contact_form">
                  <h3>Enquery <span>Form</span></h3>
                  <?php echo Form::open(array('route' => 'contact.save','method'=>'POST', 'id' => 'contact', 'name' => 'contact', 'files' => true, 'enctype' => 'multipart/form-data')); ?>

                  <label>Name (required)</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                  <label>Email (required)</label>                    
                  <input type="email" class="form-control" id="email" name="email" required>
                  <label>Mobile (required)</label>                    
                  <input type="text" class="form-control" id="phone" name="phone" required>
                  <label>Enquiry About</label>
                  <input type="text" class="form-control" id="about" name="about">
                  <label>Address</label>
                  <input type="text" class="form-control" id="address" name="address">

                  <div class="row">
                     <div class="col-lg-6">
                        <label>City</label>
                        <input type="text" class="form-control" id="city" name="city">
                     </div>
                     <div class="col-lg-6">
                        <label>Country</label>
                       <input type="text" class="form-control" id="country" name="country">
                     </div>
                  </div>                
                                    
                  <label>Query Message</label>                     
                  <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                  <input name="" type="submit" value="Submit Query" class="btn_submit">
                  <?php echo Form::close(); ?>

               </div>
            </div>
         </div>
         </div>
         <!--contact wrapper end-->
           
      <!--bottom contact start-->
       <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>