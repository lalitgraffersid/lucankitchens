<?php 
$current_route_name = \Request::route()->getName();

//echo $current_route_name; die;
?>
<div class="main-navigation navbar-collapse collapse">
          <!-- start: MAIN MENU TOGGLER BUTTON -->
          <div class="navigation-toggler">
            <i class="clip-chevron-left"></i>
            <i class="clip-chevron-right"></i>
          </div>
          <!-- end: MAIN MENU TOGGLER BUTTON -->
          <!-- start: MAIN NAVIGATION MENU -->
          <ul class="main-navigation-menu">
            <li <?php if($current_route_name == 'dashboard'): ?> class="active open" <?php endif; ?>">
              <a href="<?php echo e(url('admin/dashboard/')); ?>"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
              </a>
            </li>
            <li <?php if($current_route_name == 'setting.index'): ?> class="active open" <?php endif; ?>">
              <a href="<?php echo e(url('admin/setting/index')); ?>"><i class="clip-wrench"></i>
                <span class="title"> Settings </span><span class="selected"></span>
              </a>
            </li>
            
           
            <li <?php if($current_route_name == 'cms.index' || $current_route_name == 'cms.add' || $current_route_name == 'cms.edit'): ?> class="active open" <?php endif; ?>">
              <a href="javascript:void(0)"><i class="clip-screen"></i>
                <span class="title"> CMS </span><i class="icon-arrow"></i>
                <span class="selected"></span>
              </a>
              <ul class="sub-menu">
                <li <?php if($current_route_name == 'cms.index'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/cms/index')); ?>">
                    <span class="title"> List </span>
                    
                  </a>
                </li>
                
              </ul>
            </li>

            <li <?php if($current_route_name == 'banner.index' || $current_route_name == 'banner.add' || $current_route_name == 'banner.edit'): ?> class="active open" <?php endif; ?>">
              <a href="javascript:void(0)"><i class="clip-screen"></i>
                <span class="title"> BANNER </span><i class="icon-arrow"></i>
                <span class="selected"></span>
              </a>
              <ul class="sub-menu">
                <li <?php if($current_route_name == 'banner.index'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/banner/index')); ?>">
                    <span class="title"> List </span>
                    
                  </a>
                </li>
                <li <?php if($current_route_name == 'banner.add'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/banner/add')); ?>">
                    <span class="title"> Add </span>
                    
                  </a>
                </li>
                
              </ul>
            </li>


           <li <?php if($current_route_name == 'special.index' || $current_route_name == 'special.add' || $current_route_name == 'special.edit'): ?> class="active open" <?php endif; ?>">
              <a href="javascript:void(0)"><i class="clip-screen"></i>
                <span class="title"> Specialization</span><i class="icon-arrow"></i>
                <span class="selected"></span>
              </a>
              <ul class="sub-menu">
                <li <?php if($current_route_name == 'special.index'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/special/index')); ?>">
                    <span class="title"> List </span>
                    
                  </a>
                </li>
             
                
              </ul>
            </li>



            <li <?php if($current_route_name == 'gallery.index' || $current_route_name == 'gallery.add' || $current_route_name == 'gallery.edit'): ?> class="active open" <?php endif; ?>">
              <a href="javascript:void(0)"><i class="clip-screen"></i>
                <span class="title"> Project </span><i class="icon-arrow"></i>
                <span class="selected"></span>
              </a>
              <ul class="sub-menu">
                <li <?php if($current_route_name == 'gallery.index'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/gallery/index')); ?>">
                    <span class="title"> List </span>
                    
                  </a>
                </li>
                <li <?php if($current_route_name == 'gallery.add'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/gallery/add')); ?>">
                    <span class="title"> Add </span>
                    
                  </a>
                </li>
                
              </ul>
            </li>
			<!--- ################################33 -->
      <li <?php if($current_route_name == 'faq.index' || $current_route_name == 'faq.add' || $current_route_name == 'faq.edit'): ?> class="active open" <?php endif; ?>">
              <a href="javascript:void(0)"><i class="clip-screen"></i>
                <span class="title"> FAQ </span><i class="icon-arrow"></i>
                <span class="selected"></span>
              </a>
              <ul class="sub-menu">
                <li <?php if($current_route_name == 'faq.index'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/faq/index')); ?>">
                    <span class="title"> List </span>
                    
                  </a>
                </li>
                <li <?php if($current_route_name == 'faq.add'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/faq/add')); ?>">
                    <span class="title"> Add </span>
                    
                  </a>
                </li>
                
              </ul>
            </li>
		
			<!-- ######################################## -->
			

			

			<!-- end -->
			<!-- contact -->
            <li <?php if($current_route_name == 'contact.index'): ?> class="active open" <?php endif; ?>">
              <a href="javascript:void(0)"><i class="clip-screen"></i>
                <span class="title"> CONTACT </span><i class="icon-arrow"></i>
                <span class="selected"></span>
              </a>
              <ul class="sub-menu">
                <li <?php if($current_route_name == 'contact.index'): ?> class="active" <?php endif; ?>>
                  <a href="<?php echo e(url('/admin/contact/index')); ?>">
                    <span class="title"> List </span>
                    
                  </a>
                </li>
                
              </ul>
            </li>
            <!-- end -->

            
          </ul>
          <!-- end: MAIN NAVIGATION MENU -->
        </div>