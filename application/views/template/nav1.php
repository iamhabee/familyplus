<!-- NAVBAR
  ================================================== -->
  <nav class="navbar navbar-dark bg-white navbar-expand-lg fixed-top">
    <div class="container">
      <a href="<?php echo base_url()?>"><img src="<?php echo site_url() ?>image/logo.png" class="logo" alt="Conmpany Name"></a>&nbsp; &nbsp;

      <!-- Navbar: Brand -->
      <a class="navbar-brand text-color" href="<?php echo base_url()?>">FamilyPlus</a>

      <!-- Navbar: Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Navbar: Collapse -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Navbar navigation: Right -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Home" href="dashboard">matchmaking</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Cosultation" href="consultation">Consultatiion</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Marital-Issues" href="maritalIssues">Marital Issues</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="About" href="about">About Us</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Connect" href="connect">Connect</a></li>&nbsp; &nbsp; &nbsp;
        </ul>
        <?php 
        $sex = $this->session->user_data->gender;
        if ($sex == "male") { ?>
          <div class="dropdown bg-light"> 
            <a href="" class="dropdown-toggle bg-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/male.png'?>"></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>profile" ><?php echo $this->session->user_data->first_name; ?></a>
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>faf" >FAF</a>
                <a class="dropdown-item nav-link btn btn-light" id="logout" href="<?php echo site_url()?>logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php }else{ ?>
            <div class="dropdown bg-white"> 
            <a href="" class="dropdown-toggle btn-light"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/female.jpg'?>"></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>/dashboard/profile" ><?php echo $this->session->user_data->first_name; ?></a>
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>/dashboard/faf" >FAF</a>
                <a class="dropdown-item nav-link btn btn-light" id="logout" href="<?php echo site_url()?>/users/logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php } ?>&nbsp;
      </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container -->
  </nav> <!-- / .navbar -->
