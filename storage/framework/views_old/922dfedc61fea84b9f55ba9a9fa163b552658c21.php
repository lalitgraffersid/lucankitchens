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
                  Sales
                </li>
                
              </ol>
              <div class="page-header">
                <div class="row">
                  <div class="col-md-10">
                    <h1>Sales <small>List </small></h1>
                  </div>
                  <div class="col-md-2">
                    <a class="btn btn-primary" href="<?php echo e(url('admin/sale/add')); ?>"><i class="fa fa-plus"></i>Add sale</a>
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
                        <th>Type</th>
                        <th>Manufacturer</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <?php if(count($salesDetails) > 0): ?>
                    <tbody>
                      
                        <?php $__currentLoopData = $salesDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                      <tr>
                        <td><?php echo e($sale->type); ?></td>
                        <td><?php echo e($sale->manufacturer); ?></td>
                        <td>
                        <?php if(!empty($sale->image)): ?>
                        <img src="<?php echo e(asset("/admin/clip-one/assets/sale/thumbnail")); ?>/<?php echo e($sale->image); ?>" alt="">
                        <?php else: ?>
                        <img src="<?php echo e(asset("/admin/clip-one/assets/images/no-image-found.jpg")); ?>" alt="" height="100px" width="100px">
                        <?php endif; ?>
                        </td>
                        <td> 
                        <?php if($sale->status == 1): ?> <a title="Status" href="<?php echo e(URL::route('sales_set_status',[$sale->id])); ?>"  onclick="return confirm('Are you sure want to change status?')"> <span class="label label-success">Active</span></a> 
                        <?php elseif($sale->status == 0): ?> <a title="Status" href="<?php echo e(URL::route('sales_set_status',[$sale->id])); ?>"  onclick="return confirm('Are you sure want to change status?')"><span class="label label-danger">Inactive</span> </a> 
                        <?php endif; ?> 
                        </td>
                        <td>
                          <a href="<?php echo \URL::route('sales.edit',$sale->id); ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                          <a href="<?php echo \URL::route('sales.delete',$sale->id); ?>" onclick="return confirm('Are you sure you want to delete sale?')" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
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
<!--########## Java Script End ############-->
 
<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('admin.layouts.innerpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>