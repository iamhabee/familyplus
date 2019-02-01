<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#"></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?>">
        </div>
        <div class="user-info">
          <span class="user-name"><?php echo $this->session->userdata("user_data")->first_name; ?>
            <strong><?php echo $this->session->userdata("user_data")->last_name; ?></strong>
          </span>
          <span class="user-role"><?php echo $this->session->userdata("user_data")->marital_status; ?></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
          <span><a href="#" class="text-dark btn btn-color btn-sm"data-toggle="modal" data-target="#userModal">View Profile</a></span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <form action="<?php echo site_url('dashboard') ?>" method="GET" autocomplete="off">
              <input type="text" name="q" id="q" class="form-control search-menu" placeholder="Search...">
            </form>
            <ul id="search_result" class="text-dark">
              <li></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Pages</span>
          </li>
          <li >
            <a href="dashboard">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
             <!--  <span class="badge badge-pill badge-warning">New</span> -->
            </a>
          </li>
          <li>
            <a href="consultation">
              <i class="fa fa-shopping-cart"></i>
              <span>Consultation</span>
              <!-- <span class="badge badge-pill badge-danger">3</span> -->
            </a>
          </li>
          <li>
            <a href="maritalIssues">
              <i class="far fa-gem"></i>
              <span>Marital Issues</span>
            </a>
          </li>
          <li>
            <a href="about">
              <i class="fa fa-chart-line"></i>
              <span>About Us</span>
            </a>
          </li>
          <li>
            <a href="connect">
              <i class="fa fa-globe"></i>
              <span>Connect</span>
            </a>
          </li>
          <li class="header-menu">
            <span>About Me</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Bio</span>
              <!-- <span class="badge badge-pill badge-primary">Beta</span> -->
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Business</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-cog"></i>
              <span>Settings</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
     <!--  <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a> -->
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="logout">
        <i class="fa fa-power-off"></i>
      </a>
    </div>

  