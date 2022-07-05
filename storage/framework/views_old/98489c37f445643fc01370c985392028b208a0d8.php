<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>ECMS - <?php echo $__env->yieldContent('title'); ?></title>
	  
	  <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
	<meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo e(asset('/frontend/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('/frontend/css/all.min.css')); ?>">
      <link href="<?php echo e(asset('/frontend/css/custom.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('/frontend/css/menu.css')); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo e(asset('/frontend/css/custom_responsive.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('/frontend/css/animate.css')); ?>" rel="stylesheet">
      <link rel="shortcut icon" href="<?php echo e(asset('/frontend/images/favicon.png')); ?>" type="image/x-icon">
   </head>
   <body>
      <!--header wrapper start-->
       <?php echo $__env->make('front/includes/innerheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- menu end -->
	  <?php echo $__env->yieldContent('content'); ?>
      
      <!--bottom contact end-->
      <!--footer wrapper start-->
      <?php echo $__env->make('front/includes/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>