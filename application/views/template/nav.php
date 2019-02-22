
<!--     <div class="container-fluid fixed-div bg-dark "> -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #3c8dbc;">
    <div class="container-fluid">
      <a href="<?php echo base_url()?>"></a><img src="<?php echo site_url() ?>image/logo.png" class="logo" alt="Conmpany Name"> &nbsp; &nbsp;
      <a href="<?php echo base_url()?>" class="navbar-brand text-white">FamilyPlus</a>

      <button class="navbar-toggler blue" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Home" href="dashboard">Community</a></li>&nbsp; &nbsp; &nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Cosultation" href="chat">Consultatiion</a></li>&nbsp; &nbsp; &nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Marital-issues" href="maritalIssues">Marital Issues</a></li>&nbsp; &nbsp; &nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="About" href="about">About</a></li>&nbsp; &nbsp; &nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Connect" href="connect">Connect</a></li>&nbsp; &nbsp; &nbsp;

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
          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Login" href="login">Login</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-white btn btn-color tooltip-test" title="signup" href="signup" >Get Started</a></li>    
           <?php }  ?>
        </ul>
      <!-- <?php// endif; ?>  -->
      </div>
    </div>
  </nav>
    <!-- </div> -->
