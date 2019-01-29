
<!--     <div class="container-fluid fixed-div bg-dark "> -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-light">
    <div class="container">
      <a href="<?php echo base_url()?>"></a><img src="<?php echo site_url() ?>image/logo.png" class="logo" alt="Conmpany Name"> &nbsp; &nbsp;
      <a href="<?php echo base_url()?>" class="navbar-brand text-color">FamilyPlus</a>

      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <?php //if ( current_url() == base_url()): ?>         -->
        <ul class="navbar-nav ml-auto">
          <?php if (isset($this->session->user_data)):  ?>
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Home" href="dashboard">matchmaking</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Cosultation" href="consultation">Consultatiion</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Marital-issues" href="maritalIssues">Marital Issues</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="About" href="about">About</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Connect" href="connect">Connect</a></li>&nbsp; &nbsp; &nbsp;
          <?php 
        // $sex = $this->session->user_data->user_id.'.jpg';
        if ($this->session->user_data->user_id.'.jpg' === null) { ?>
          <div class="dropdown"> 
            <a href="" class="dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?>"></a>
              <div class="dropdown-menu text-color" >
                <a class="dropdown-item text-color" href="<?php echo site_url()?>profile" ><?php echo $this->session->user_data->first_name; ?></a>
                <a class="dropdown-item text-color" href="<?php echo site_url()?>faf" >FAF</a>
                <a class="dropdown-item text-color" id="logout" href="<?php echo site_url()?>logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php }else{ ?>
            <div class="dropdown bg-white"> 
            <a href="" class="dropdown-toggle bg-dark"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url() ?>image/image00.jpg"></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn text-color" href="<?php echo site_url()?>/dashboard/profile" ><?php echo $this->session->user_data->first_name; ?></a>
                <a class="dropdown-item btn text-color" href="<?php echo site_url()?>/dashboard/faf" >FAF</a>
                <a class="dropdown-item btn text-color" id="logout" href="<?php echo site_url()?>/users/logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php } else:
          ?>
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Home" href="login">matchmaking</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Cosultation" href="login">Consultatiion</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Marital-issues" href="login">Marital Issues</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="About" href="login">About Us</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Connect" href="login">Connect</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Login" href="login">Login</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-white btn btn-color tooltip-test" title="signup" href="signup" >Get Started</a></li>    
           <?php endif;  ?>
        </ul>
      <!-- <?php// endif; ?>  -->
      </div>
    </div>
  </nav>
    <!-- </div> -->
