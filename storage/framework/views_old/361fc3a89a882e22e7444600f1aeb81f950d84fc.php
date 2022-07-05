

<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
  <!--<![endif]-->
  <!-- start: HEAD -->
  <head>
    <title>Lucankitchens - Responsive Admin Template</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/bootstrap/css/bootstrap.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/font-awesome/css/font-awesome.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/fonts/style.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/css/main.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/css/main-responsive.css")); ?>">

    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/css/theme_light.css")); ?>" type="text/css" id="skin_color">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/css/print.css")); ?>" type="text/css" media="print"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
  </head>


  <body class="login example1">
    <div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
      <div class="logo">Forgot Password
      </div>
      <!-- start: LOGIN BOX -->
      <div class="box-login">
        <h3>Forgot Password</h3>
        <p>
          Please enter your email to send password link.
        </p>
        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if(Session::has('message')): ?>
      <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>
      <?php endif; ?>
        <?php echo e(Form::open(array('url' => 'admin/forgotmail'))); ?>

        <?php echo e(csrf_field()); ?>

          <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
          </div>
          <fieldset>

            <div class="form-group">
              <span class="input-icon">
                <!-- <input type="email" class="form-control" name="email" placeholder="Email"> -->
                <?php echo Form::email('email', Cookie::get('user'), array('id' => 'email', 'name' => 'email',  'placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required')); ?>

                <i class="fa fa-user"></i> </span>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-bricky pull-right">
                Change Password <i class="fa fa-arrow-circle-right"></i>
              </button>
            </div>

          </fieldset>
        <?php echo e(Form::close()); ?>

      </div>
    </div>
   
    <!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!--<![endif]-->
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/bootstrap/js/bootstrap.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/js/main.js")); ?>"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/js/login.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
      jQuery(document).ready(function() {
        Main.init();
        Login.init();
      });
    </script>
  </body>
  <!-- end: BODY -->
</html>