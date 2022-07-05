
<?php $__env->startSection('content'); ?>
    <!-- start: MAIN CONTAINER -->    

    <div class="container">
          <!-- start: PAGE HEADER -->
          <div class="row">
            <div class="col-sm-12">
           
              <!-- start: PAGE TITLE & BREADCRUMB -->
              <ol class="breadcrumb">
                <li>
                  <i class="clip-home-3"></i>
                  <a href="<?php echo e(url('admin/dashboard/')); ?>">
                    Home
                  </a>
                </li>
                <li class="active">
                  Dashboard
                </li>
              </ol>
              <div class="page-header">               
                <h1>Settings</h1>
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
            </div>
          </div>
          <!-- end: PAGE HEADER -->
          <!-- start: PAGE CONTENT -->
          
         <div class="panel-body">
                  <?php echo Form::open(array('route' => 'setting.update','method'=>'POST', 'role' => 'form' ,'name' => 'setting', 'id' => 'setting', 'files' => true, 'enctype' => 'multipart/form-data')); ?> 
                  
                    <div class="row">
                      <?php if(Session::has('message')): ?>
                       <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>
                      <?php endif; ?>
                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label class="control-label">
                            Home phone <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="home_phone" class="form-control" id="home_phone" name="home_phone" value="<?php echo e($settingDetails->home_phone); ?>">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Facebook <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="facebook" class="form-control" id="facebook" name="facebook" value="<?php echo e($settingDetails->facebook); ?>">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Youtube <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="Youtube" class="form-control" id="youtube" name="youtube" value="<?php echo e($settingDetails->youtube); ?>">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Instagram <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="instagram" class="form-control" id="instagram" name="instagram" value="<?php echo e($settingDetails->instagram); ?>">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Google Plus <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="googleplus" class="form-control" id="googleplus" name="googleplus" value="<?php echo e($settingDetails->googleplus); ?>">
                        </div>
                        
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">
                            Email Address <span class="symbol"></span>
                          </label>
                          <input type="email" placeholder="Text Field" class="form-control" id="email" name="email" value="<?php echo e($settingDetails->email); ?>">
                        </div>
                        <div class="form-group">
                          <label class="control-label">
                            linkedin <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="linkedin" class="form-control" id="linkedin" name="linkedin" value="<?php echo e($settingDetails->linkedin); ?>">
                        </div>
                        <div class="form-group">
                          <label class="control-label">
                            Address <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="Address" class="form-control" id="address" name="address"  value="<?php echo e($settingDetails->address); ?>">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Twitter <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="Twitter" class="form-control" id="twitter" name="twitter" value="<?php echo e($settingDetails->twitter); ?>">
                        </div>
						<div class="form-group">
                          <label class="control-label">
                            Pinterest <span class="symbol"></span>
                          </label>
                          <input type="text" placeholder="pinterest" class="form-control" id="pinterest" name="pinterest" value="<?php echo e($settingDetails->pinterest); ?>">
                        </div>
   
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-primary" >Update</button>
                   
                        <a class="btn btn-green" href="<?php echo e(url('admin/dashboard')); ?>">Back</a>
                      </div>
                      
                    </div>
                  <?php echo Form::close(); ?> 
                </div>
          
          
          <!-- end: PAGE CONTENT-->
        </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
<?php $__env->stopSection(); ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<?php $__env->startSection('script'); ?>
  
  <!--    #################  setting form validation ##################### -->
  <script src="<?php echo e(asset("/admin/clip-one/assets/js/setting.js")); ?>"></script>
  <!--    #################  cms form validation ##################### -->


<?php $__env->stopSection(); ?>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>