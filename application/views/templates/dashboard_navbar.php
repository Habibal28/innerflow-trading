
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg bg-warning"></div>
      <nav class="navbar navbar-expand-lg main-navbar">

          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
           
          </ul>

        <ul class="navbar-nav navbar-right">
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url('assets/img/foto-profile/').$this->session->userdata('image')?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?=$this->session->userdata('name')?></div></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
              <a href="<?=base_url('Member/Profile')?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <!-- <a href="features-activities.html" class="dropdown-item has-icon"> -->
                <!-- <i class="fas fa-bolt"></i> Activities -->
              <!-- </a> -->
              <!-- <a href="features-settings.html" class="dropdown-item has-icon"> -->
                <!-- <i class="fas fa-cog"></i> Settings -->
              <!-- </a> -->
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('Auth/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      
      