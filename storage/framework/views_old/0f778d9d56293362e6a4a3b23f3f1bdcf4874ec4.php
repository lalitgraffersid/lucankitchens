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
                <h1>Dashboard</h1>
              </div>
              <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
          </div>
          <!-- end: PAGE HEADER -->
          <!-- start: PAGE CONTENT -->
          
          <H1>Welcome to ecms Dashboard</H1>
          
          
          <!-- end: PAGE CONTENT-->
        </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>