 <header class="main-header margin-bottom">
    <!-- Logo -->

    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div>
        <a href="<?php echo base_url()?>">
          <img src="<?php echo site_url() ?>image/logo.png" class="logo-img" alt="Conmpany Name">
        </a>
        <a href="<?php echo base_url()?>">
          <span class=" text-white"><b>familyPlus</b></span>
        </a>
      </div>&nbsp; &nbsp; &nbsp; &nbsp; 
      <a class="navbar-toggler blue" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ">

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Home" href="<?php echo base_url()?>dashboard">Community</a></li>&nbsp; 

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Cosultation" href="<?php echo base_url()?>chat">Consultation</a></li>&nbsp; 

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Marital-issues" href="<?php echo base_url()?>maritalIssues">Marital Issues</a></li>&nbsp;
          
         <?php if ($this->session->user_data){ 
        if (!file_exists($this->session->userdata('user_data')->user_id.'.jpg')) { ?>

          <li class="nav-item dropdown user user-menu">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <img style="width: 20px; height: 20px; border-radius: 20px;" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?>">
            </a>
            <ul class="dropdown-menu ">
              <!-- User image -->
              <li class="user-header">
              
                <img style="width: 100px; height: 100px;" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?>">
                <p>
                  <span class="NameEdt"> <?=$this->session->user_data->first_name. " ". $this->session->user_data->last_name;?></span>
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
                  <a href="<?=base_url('logout');?>" id="logout" class="btn btn-default btn-flat">Sign out</a>
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