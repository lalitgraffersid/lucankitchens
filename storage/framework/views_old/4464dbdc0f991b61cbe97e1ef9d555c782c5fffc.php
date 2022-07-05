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
                  <a href="#">
                    Home
                  </a>
                </li>
                <li class="active">
                  Shop
                </li>
                
              </ol>
              <div class="page-header">
                <div class="row">
                  <div class="col-md-10">
                    <h1>Shop <small>List </small></h1>
                  </div>
                  <div class="col-md-2">
                    <a class="btn btn-primary" href="<?php echo e(url('admin/gallery/add')); ?>"><i class="fa fa-plus"></i>Add Shop</a>
                  </div>
                </div>
                    
              </div>
               <?php if(Session::has('message')): ?>
                <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>
              <?php endif; ?>
              <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
          </div>
          <!-- end: PAGE HEADER -->
          <!-- start: PAGE CONTENT -->
          <div class="row">
            <div class="col-md-12">
              <!-- start: DYNAMIC TABLE PANEL -->
             
              <div class="panel panel-default">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                    <thead>
                      <tr>
                        
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <?php if(count($galleryDetails) > 0): ?>
                    <tbody>
                      
                        <?php $__currentLoopData = $galleryDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                      <tr>
                     
                        <td><?php echo e($gallery->gallery_title); ?></td>
                        <td>
                        <?php if(!empty($gallery->gallery_image)): ?>
                        <img src="<?php echo e(asset("/admin/clip-one/assets/gallery/thumbnail")); ?>/<?php echo e($gallery->gallery_image); ?>" alt="">
                        <?php else: ?>
                        <img src="<?php echo e(asset("/admin/clip-one/assets/images/no-image-found.jpg")); ?>" alt="" height="100px" width="100px">
                        <?php endif; ?>
                        </td>
                        <td> 
                        <?php if($gallery->status == 1): ?> <a title="Status" href="<?php echo e(URL::route('gallery_set_status',[$gallery->id])); ?>"  onclick="return confirm('Are you sure want to change status?')"> <span class="label label-success">Active</span></a> 
                        <?php elseif($gallery->status == 0): ?> <a title="Status" href="<?php echo e(URL::route('gallery_set_status',[$gallery->id])); ?>"  onclick="return confirm('Are you sure want to change status?')"><span class="label label-danger">Inactive</span> </a> 
                        <?php endif; ?> 
                        </td>
                        <td>
                          <a href="<?php echo \URL::route('gallery.edit',$gallery->id); ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                          <a href="<?php echo \URL::route('gallery.delete',$gallery->id); ?>" onclick="return confirm('Are you sure you want to delete gallery?')" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                        </td>
                        
                      </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                     <?php endif; ?>
 
                  </table>
                </div>
              </div>
             
              
            </div>

              <!-- end: DYNAMIC TABLE PANEL -->
            </div>
          </div>
          
          <!-- end: PAGE CONTENT-->
        </div>
    <!-- end: MAIN CONTAINER -->
  
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<!--########## Java Script Start ##########-->

    <script type="text/javascript" src="<?php echo e(asset("/admin/clip-one/assets/plugins/DataTables/media/js/jquery.dataTables.min.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset("/admin/clip-one/assets/plugins/DataTables/media/js/DT_bootstrap.js")); ?>"></script>
    <script src="<?php echo e(asset("/admin/clip-one/assets/js/table-data.js")); ?>"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
      jQuery(document).ready(function() {
        TableData.init();
      });
    </script>
 
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>