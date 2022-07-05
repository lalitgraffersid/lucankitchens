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
                    special 
                  </a>
                </li>
                <li class="active">
                  Add
                </li>
              </ol>
              <div class="page-header">
                <h1>Add special </h1>
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
            <!-- <?php echo Form::open(['url' => 'cms/save', 'method' => 'post', 'name' => 'cmsAdd', 'id' => 'cmsAdd', 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal' ]); ?>-->
           <?php echo Form::open(array('route' => 'special.save','method'=>'POST', 'class' => 'form-horizontal', 'id' => 'bannerAdd', 'name' => 'bannerAdd', 'files' => true, 'enctype' => 'multipart/form-data')); ?> 

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_title">
                        Banner Title
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="special_title" id="banner_title" placeholder="Title"  class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_description">
                        Banner Description
                      </label>
                      <div class="col-sm-9">
                        <textarea id="banner_description" name="special_description" rows="7" class="form-control ckeditor" placeholder="Write your message.." required="required"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="banner_image">
                      Banner Image
                      </label>
                      <div class="col-sm-9">
                        <input type="file" class="file-input" name="special_image" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">
                       
                      </label>
                      <div class="col-sm-9">

                        <button type="submit" class="btn btn-primary" >Save</button>
                   
                    <a class="btn btn-green" href="<?php echo e(url('admin/banner/index')); ?>">Back</a>
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
    <script src="<?php echo e(asset('/admin/clip-one/assets/plugins/ckeditor/ckeditor.js')); ?>"></script>
  <!--    #################  cms form validation ##################### -->
  <script src="<?php echo e(asset('/admin/clip-one/assets/js/banner.js')); ?>"></script>
  <!--    #################  cms form validation ##################### -->
  <script type="text/javascript">
    var base_url = "<?php echo e(url('')); ?>";
  </script>
  <script type="text/javascript">
        var editor = CKEDITOR.replace( 'banner_description', {

                             filebrowserBrowseUrl : '<?php echo e(url('')); ?>/admin/clip-one/assets/plugins/ckfinder/ckfinder.html',

                             filebrowserImageBrowseUrl : '<?php echo e(url('')); ?>/admin/clip-one/assets/plugins/ckfinder/ckfinder.html?type=Images',

                             filebrowserFlashBrowseUrl : '<?php echo e(url('')); ?>/admin/clip-one/assets/plugins/ckfinder/ckfinder.html?type=Flash',

                             filebrowserUploadUrl : '<?php echo e(url('')); ?>/admin/clip-one/assets/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                             filebrowserImageUploadUrl : '<?php echo e(url('')); ?>/admin/clip-one/assets/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                             filebrowserFlashUploadUrl : '<?php echo e(url('')); ?>/admin/clip-one/assets/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

                             }); 
  </script> 

<?php $__env->stopSection(); ?>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->



<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>