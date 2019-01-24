<!-- NAVBAR
  ================================================== -->
  <nav class="navbar navbar-dark bg-white navbar-expand-lg fixed-top">
  	<?php if (isset($this->session->user_data)): ?>
  		<div class="container" >
      <a href="<?php echo base_url()?>dashboard"><img src="<?php echo site_url() ?>image/logo.png" class="logo" alt="Conmpany Name"></a>&nbsp; &nbsp;
      <!-- Navbar: Brand -->
      <a class="navbar-brand text-color" href="dashboard">FamilyPlus</a>
      <?php else: ?>
      	<div class="container" >
      <a href="<?php echo base_url()?>page"><img src="<?php echo site_url() ?>image/logo.png" class="logo" alt="Conmpany Name"></a>&nbsp; &nbsp;	
      <!-- Navbar: Brand -->
      <a class="navbar-brand text-color" href="page">FamilyPlus</a>
  	<?php endif; ?>

      <!-- Navbar: Toggler -->
      <button class="navbar-toggler bg-color" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Navbar: Collapse -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Navbar navigation: Right -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="About" href="about">About Us</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Connect" href="connect">Connect</a></li>&nbsp; &nbsp; &nbsp;
        
        <?php if (isset($this->session->user_data)):

         $sex = $this->session->user_data->gender;
        if ($sex == "male") : ?>
          <div class="dropdown bg-light"> 
            <a href="" class="dropdown-toggle bg-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/male.png'?>"></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>profile" >Profile</a>
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>faf" >FAF</a>
                <a class="dropdown-item nav-link btn btn-light" id="logout" href="<?php echo site_url()?>logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php else: ?>
            <div class="dropdown bg-white"> 
            <a href="" class="dropdown-toggle btn-light"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/female.jpg'?>"></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>/dashboard/profile" >Profile</a>
                <a class="dropdown-item nav-link btn btn-light" href="<?php echo site_url()?>/dashboard/faf" >FAF</a>
                <a class="dropdown-item nav-link btn btn-light" id="logout" href="<?php echo site_url()?>/users/logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php endif; else:  ?>
      	  <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Login" href="login">Login</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-white btn btn-color tooltip-test" title="signup" href="signup" >Get Started</a></li>
      <?php endif; ?>
      </ul>
      </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container -->
  </nav> <!-- / .navbar -->
