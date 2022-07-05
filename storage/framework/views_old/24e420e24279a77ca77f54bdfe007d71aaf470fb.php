
<?php $__env->startSection('content'); ?>
    <!-- start: MAIN CONTAINER -->

        <div class="container">
          <!-- start: PAGE HEADER -->
          
          <div class="row">
            <div class="col-sm-12">
              <!-- start: STYLE SELECTOR BOX -->
              <!-- end: STYLE SELECTOR BOX -->
              <!-- start: PAGE TITLE & BREADCRUMB -->
              <ol class="breadcrumb">
                <li>
                  <i class="clip-pencil"></i>
                  <a href="#">
                    Testimonial
                  </a>
                </li>
                <li class="active">
                  Add
                </li>
              </ol>
              <div class="page-header">
                <h1>Add Testimonial </h1>
              </div>
              <!-- end: PAGE TITLE & BREADCRUMB -->
              <!-- Display all errors -->
              <?php if(count($errors) > 0): ?>
              <div class="alert alert-danger val-error-list">
                <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
              <?php endif; ?>

              <!-- ############ -- >
            </div>
          </div>
          <!-- end: PAGE HEADER -->
          <!-- start: PAGE CONTENT -->
          <div class="row">
            <div class="col-sm-12">
              <!-- start: TEXT FIELDS PANEL -->
              <div class="panel panel-default">
                <div class="panel-body">
                  				  <?php if(Session::has('message')): ?>                <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>              <?php endif; ?>
            
           <?php echo Form::open(array('route' => 'testimonial.save','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'testimonialAdd', 'name' => 'testimonialAdd', 'files' => true, 'enctype' => 'multipart/form-data')); ?> 

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="name">
                        Name
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="name" id="name" placeholder="name"  class="form-control">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="degination">
                        Degination
                      </label>
                      <div class="col-sm-9">
                        <textarea id="degination" name="degination" rows="2" class="form-control" placeholder="degination Descripotion" required="required"></textarea>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-2 control-label" for="description">
                        Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="description" name="description" rows="7" class="form-control" placeholder="Descripotion" required="required"></textarea>
                      </div>
                    </div>
					

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="profile_image">
                       Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="profile_image">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                        <button type="submit" class="btn btn-primary" >Save</button>
                   
                    <a class="btn btn-green" href="<?php echo e(url('admin/testimonial/index')); ?>">Back</a>
                      </div>
                    </div>

                 <?php echo Form::close(); ?> 
                </div>
              </div>
              <!-- end: TEXT FIELDS PANEL -->
            </div>
          </div>
          <!-- end: PAGE CONTENT-->
        </div>
    <!-- end: MAIN CONTAINER -->
  
<?php $__env->stopSection(); ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<?php $__env->startSection('script'); ?>
  
  <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/ckeditor/ckeditor.js")); ?>"></script>
  <!--    #################  cms form validation ##################### -->
  <script src="<?php echo e(asset("/admin/clip-one/assets/js/cms.js")); ?>"></script>
  <!--    #################  cms form validation ##################### -->
  <script type="text/javascript">
    var base_url = "<?php echo e(url('')); ?>";
  </script>

<?php $__env->stopSection(); ?>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->




<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>