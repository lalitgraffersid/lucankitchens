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
                    Banner 
                  </a>
                </li>
                <li class="active">
                  Edit
                </li>
              </ol>
              <div class="page-header">
                <h1>Edit Banner</h1>
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
                  
           <?php echo Form::open(array('route' => 'banner.update','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'bannerEdit', 'name' => 'bannerEdit', 'files' => true, 'enctype' => 'multipart/form-data')); ?> 

                    
                   <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_title">
                        Banner Type
                      </label>
                      <div class="col-sm-9">
                     <select name="type" class="form-control" required>
                      <option value="home" <?php if($bannerDetail[0]['type']=='home'): ?>selected <?php endif; ?>>home</option>
                                          <option value="kitchen" <?php if($bannerDetail[0]['type']=='kitchen'): ?>selected <?php endif; ?>>kitchen</option>
                      <option value="wardrobe" <?php if($bannerDetail[0]['type']=='wardrobe'): ?>selected <?php endif; ?> >wardrobe</option>
                      <option value="interior" <?php if($bannerDetail[0]['type']=='interior'): ?>selected <?php endif; ?> >interior</option>
                      <option value="faq" <?php if($bannerDetail[0]['type']=='faq'): ?> selected <?php endif; ?>>faq</option>
                      <option value="planner" <?php if($bannerDetail[0]['type']=='planner'): ?> selected <?php endif; ?>>planner</option>
                      <option value="bespoke" <?php if($bannerDetail[0]['type']=='bespoke'): ?> selected <?php endif; ?>>bespoke</option>
 <option value="contact" <?php if($bannerDetail[0]['type']=='contact'): ?> selected <?php endif; ?>>Contact-us</option>
                      </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_title">
                        Banner Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="banner_title" id="page_title" placeholder="Title"  class="form-control" value="<?php echo e($bannerDetail[0]['banner_title']); ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_description">
                        Banner Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="banner_description" name="banner_description" rows="7" class="form-control ckeditor" placeholder="Write your message.." required="required"><?php echo e($bannerDetail[0]['banner_description']); ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_image">
                        Banner Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="banner_image">
                        <!--<?php if(!empty($bannerDetail[0]['banner_image'])): ?>-->
                          <br><!--<?php echo e($bannerDetail[0]['banner_image']); ?><img src="<?php echo e(asset('/admin/clip-one/assets/banner/original')); ?>/<?php echo e($bannerDetail[0]['banner_image']); ?>" alt=""> -->
						  
						  <img src="http://lucankitchens.ie/admin/clip-one/assets/banner/banner/original/<?php echo e($bannerDetail[0]['banner_image']); ?>" alt="" width="350" height="250"> 
                
                   <!--   <?php endif; ?>-->
                      </div>
                       
                    </div>
                    <input type="hidden" class="form-control" name="banner_id" id="banner_id" value="<?php echo e($bannerDetail[0]['id']); ?>">
                     <input type="hidden" class="form-control" name="image" id="image" value="1">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                       
                        <input type="submit" id="save" name="save" class="btn btn-primary" value="Update"/>
                        <a class="btn btn-green" href="<?php echo e(url('admin/banner/index')); ?>">Back</a>
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
   <script src="<?php echo e(asset("/admin/clip-one/assets/js/banner.js")); ?>"></script>
  <!--    #################  cms form validation ##################### -->


<?php $__env->stopSection(); ?>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>