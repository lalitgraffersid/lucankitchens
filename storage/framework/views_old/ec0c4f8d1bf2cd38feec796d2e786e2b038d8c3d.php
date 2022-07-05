<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>

 <!--banner wrapper start-->
      <div class="banner_wrapper_inner">    
            
         <img src="<?php echo e(asset('/frontend/images/inner_banner_02.jpg')); ?>" alt="">
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
            <?php echo $homeBoxDes; ?>

         </div>
      </div>
      <!--topconsultation end-->
<!--inner wrapper start-->
      <div class="inner_wrapper genpad">
         <div class="container">
            <div class="row">               
               <div class="col-md-12 wow fadeInUp">
                  <h1>Kitchen <span>Planners</span></h1>

                  <p>Considering a new kitchen?  It’s important that your new kitchen includes everything to suit your lifestyle needs.</p>

                  <p>Do you love to cook? Is space an issue?</p> 

                  <p>Our Kitchen Planner is a useful tool to help you sketch out your dimensions and design your new space. You can also take a photo of your existing kitchen and bring it along too.</p> 

                  <p><strong>Some handy tips for using the planner:</strong></p>

                  <ul class="genlist">
                     <li>Roughly sketch out your room shape</li>
                     <li>Measure the length and width of your room</li>
                     <li>Measure the size of all windows</li>
                     <li>Measure the size, location and direction of the opening of all doors.</li>
                     <li>Sketch where your existing sink and cooker are, and indicate the position of gas, water, air vents and any electrical sockets.</li>
                     <li>Highlight any pillars, bulkheads etc</li>
                     <li>Include position and measurements of radiators/boilers</li>
                     <li>Please indicate on drawing exterior walls.</li>
                  </ul>

                  <p><a href="documents/lucan-planner.pdf" target="_blank" class="btn_pdf">Design your Kitchen</a></p>


               </div>
            </div>
         </div>
      </div>
      <!--inner wrapper end-->
      <!--bottom contact start-->
 <?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>