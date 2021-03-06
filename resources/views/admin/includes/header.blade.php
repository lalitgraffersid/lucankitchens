    <div class="navbar navbar-inverse navbar-fixed-top">
      <!-- start: TOP NAVIGATION CONTAINER -->
      <div class="container">
        <div class="navbar-header">
          <!-- start: RESPONSIVE MENU TOGGLER -->
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="clip-list-2"></span>
          </button>
          <!-- end: RESPONSIVE MENU TOGGLER -->
          <!-- start: LOGO -->
          <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
            Lucankitchens
          </a>
          <!-- end: LOGO -->
        </div>
        <div class="navbar-tools">
          <!-- start: TOP NAVIGATION MENU -->
          <ul class="nav navbar-right">
            <!-- start: TO-DO DROPDOWN -->
            <!-- start: USER DROPDOWN -->
            <li class="dropdown current-user">
              <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                <img src="{{ asset("/admin/clip-one//assets/images/avatar-1-small.jpg") }}" class="circle-img" alt="">
                <span class="username">{{ auth()->user()->name }}</span>
                <i class="clip-chevron-down"></i>
              </a>
              <ul class="dropdown-menu">
                <!-- <li>
                  <a href="pages_user_profile.html">
                    <i class="clip-user-2"></i>
                    &nbsp;My Profile
                  </a>
                </li> -->
                
                <li>
                  <a href="{{ url('admin/logout') }}">
                    <i class="clip-exit"></i>
                    &nbsp;Log Out
                  </a>
                </li>

                <li>
                  <a href="{{ url('admin/reset_password') }}">
                    <i class="clip-exit"></i>
                    &nbsp;Reset Password
                  </a>
                </li>

              </ul>
            </li>
            <!-- end: USER DROPDOWN -->
          </ul>
          <!-- end: TOP NAVIGATION MENU -->
        </div>
      </div>
      <!-- end: TOP NAVIGATION CONTAINER -->
    </div>