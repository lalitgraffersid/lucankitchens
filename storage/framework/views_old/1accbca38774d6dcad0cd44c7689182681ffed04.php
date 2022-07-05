<?php $__env->startSection('content'); ?>
    <!-- start: MAIN CONTAINER -->

        <div class="container" ng-controller="cmsController">
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
                    Product 
                  </a>
                </li>
                <li class="active">
                  Edit
                </li>
              </ol>
              <div class="page-header">
                <h1>Edit Product </h1>
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
                  <div class="alert-mesg" flash-message="{{statusMesg}}"></div>

           <?php echo Form::open(array('route' => 'gallery.update','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'galleryEdit', 'name' => 'galleryEdit', 'files' => true, 'enctype' => 'multipart/form-data')); ?> 

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_title">
                        Product Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="gallery_title" id="page_title" placeholder="Title"  class="form-control" value="<?php echo e($galleryDetail->gallery_title); ?>" required="required">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="gallery_image">
                        Product Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="gallery_image">
                        <?php if(!empty($galleryDetail->gallery_image)): ?>
                          <br><img src="<?php echo e(asset("/admin/clip-one/assets/gallery/thumbnail")); ?>/<?php echo e($galleryDetail->gallery_image); ?>" alt=""> 
                   
                      <?php endif; ?>
                      </div>
                       
                    </div>
                    <input type="hidden" class="form-control" name="gallery_id" id="gallery_id" value="<?php echo e($galleryDetail->id); ?>">
                     <input type="hidden" class="form-control" name="image" id="image" value="1">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                       
                        <input type="submit" id="save" name="save" class="btn btn-primary" value="Update"/>
                        <a class="btn btn-green" href="<?php echo e(url('admin/gallery/index')); ?>">Back</a>
                      </div>
                    </div>

                 <!--  <?php echo Form::close(); ?>  -->
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
  
  <!--    #################  cms form validation ##################### -->
   <script src="<?php echo e(asset("/admin/clip-one/assets/js/gallery.js")); ?>"></script>
  <!--    #################  cms form validation ##################### -->


<?php $__env->stopSection(); ?>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->


<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>