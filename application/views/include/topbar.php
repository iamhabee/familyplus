 <header class="main-header">
    <!-- Logo -->
    <div class="bg-light">
    <a href="<?php echo base_url()?>">
      <img src="<?php echo site_url() ?>image/logo.png" class="logo-img" alt="Conmpany Name">
      <span class="logo-mini"><b>FamilyPlus</b></span>
    </a>
    </div> 
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <a class="navbar-toggler blue" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Home" href="dashboard">Community</a></li>&nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Cosultation" href="chat">Consultatiion</a></li>&nbsp; 

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Marital-issues" href="maritalIssues">Marital Issues</a></li>&nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="About" href="about">About</a></li> &nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Connect" href="connect">Connect</a></li>&nbsp;
          
         <?php if ($this->session->user_data){ 
        if (file_exists($this->session->userdata('user_data')->user_id.'.jpg')) { ?>

          <li class="nav-item dropdown user user-menu">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?>">
              <span class="hidden-xs NameEdt"><?=$this->session->user_data->first_name;?></span>
            </a>
            <ul class="dropdown-menu ">
              <!-- User image -->
              <li class="user-header">
              
                <img style="width: 200px; height: 178px; border-radius: 50px;" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?>">
                <p>
                  <span class="NameEdt"> <?=$this->session->user_data->first_name;?></span>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=base_url('profile');?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url('logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php }else{ ?>
            <li class="nav-item dropdown user user-menu">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <span class="hidden-xs NameEdt"><?=$this->session->user_data->first_name;?></span>
            </a>
            <ul class="dropdown-menu ">
              <!-- User image -->
              <li class="user-header">
                <p>
                  <span class="NameEdt"> <?=$this->session->user_data->first_name;?></span> 
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=base_url('profile');?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url('logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php }}else{  ?>
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Login" href="login">Login</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-white btn btn-color tooltip-test" title="signup" href="signup" >Get Started</a></li>    
           <?php }  ?>
           
        </ul>
      </div>
    </nav>
  </header>