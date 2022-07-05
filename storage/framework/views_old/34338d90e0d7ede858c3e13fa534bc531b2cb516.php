<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
  <!--<![endif]-->
  <!-- start: HEAD -->
  <head>
    <title>Lucankitchens- Responsive Admin Template</title>
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
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/iCheck/skins/all.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/css/theme_light.css")); ?>" type="text/css" id="skin_color">
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/css/print.css")); ?>" type="text/css" media="print"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css")); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("/admin/clip-one/assets/plugins/select2/select2.css")); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset("/admin/clip-one/assets/plugins/DataTables/media/css/DT_bootstrap.css")); ?>" />
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript">
        var base_url = "<?php echo e(url('')); ?>";
    </script>
  </head>
  <!-- end: HEAD -->
  <!-- start: BODY -->  
  <body>
    <!-- start: HEADER -->
    <?php echo $__env->make('admin/includes/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- end: HEADER -->
    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
      <div class="navbar-content">
        <!-- start: SIDEBAR -->
        <?php echo $__env->make('admin/includes/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- end: SIDEBAR -->
      </div>
      <!-- start: PAGE -->
      <div class="main-content">
         <?php echo $__env->yieldContent('content'); ?>
        
      </div>
      <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
      <?php echo $__env->make('admin/includes/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- end: FOOTER -->

    <!--######## Main js Start #############-->
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/bootstrap/js/bootstrap.min.js")); ?>"></script>
   
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/select2/select2.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/plugins/jquery-cookie/jquery.cookie.js")); ?>"></script>
   
    <script src="<?php echo e(asset("/admin/clip-one/assets/js/main.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/js/bootstrapValidator.js")); ?>"></script>
   

     <!--######## Main js End #############-->

     <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
       <?php echo $__env->yieldContent('script'); ?>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    
    <script>
      jQuery(document).ready(function() {
        Main.init();
         
      });
    </script>

  </body>
  <!-- end: BODY -->
</html>
