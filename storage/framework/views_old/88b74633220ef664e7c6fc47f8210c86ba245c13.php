<?php $__env->startSection('title', $cms_data->meta_title); ?>
<?php $__env->startSection('description', $cms_data->meta_description); ?>
<?php $__env->startSection('keywords', $cms_data->meta_keyword); ?>
<?php $__env->startSection('content'); ?>
 <!--machine sale wrapper start-->
      <div class="machine_sale genpad">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Machines for sale</h2>
               </div>
            </div>
            <div class="row">
				<?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <div class="col-md-4 wow fadeInUp">
                  <div class="box">
                     <div class="pic">
					  <img src="<?php echo e(url('admin/clip-one/assets/sale/original')); ?>/<?php echo e($sale->image); ?>" alt="<?php echo e($sale->type); ?>">
					 </div>
                     <p><strong>Machine type :</strong>  <?php echo e($sale->type); ?></p>
                     <p><strong>Manufacturer :</strong> <?php echo e($sale->manufacturer); ?></p>
                     <p><strong>Manufacturer Year :</strong>  <?php echo e($sale->year); ?></p>
                     <p><strong>Description :</strong> </p>
                     <p><?php echo e($sale->description); ?>.</p>
                  </div>
               </div>
			   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
            </div>
            
         </div>
      </div>
      <!--machine sale wrapper end-->
      <!--bottom contact start-->
		<?php echo $__env->make('front/includes/contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--bottom contact end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>