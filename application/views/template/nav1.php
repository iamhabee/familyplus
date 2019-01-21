<!-- NAVBAR
  ================================================== -->
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <div class="container" style="padding-left: 0px; margin-left: 0px; margin-right: 0px;">
      <a href="<?php echo base_url()?>dashboard"><img src="<?php echo site_url() ?>image/family-plus.png" class="logo" alt="Conmpany Name"></a>&nbsp; &nbsp;

      <!-- Navbar: Brand -->
      <a class="navbar-brand" href="index.html">FamilyPlus</a>

      <!-- Navbar: Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Navbar: Collapse -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Navbar navigation: Left -->
        <!-- <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">About Us</a>
          </li>

        </ul> -->

        <!-- Navbar navigation: Right -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="news-and-events.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">About Us</a>
          </li>
        </ul>
        <?php 
        $sex = $this->session->user_data->gender;
        if ($sex == "male") { ?>
          <div class="dropdown bg-dark"> 
            <a href="" class="dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/male.png'?>"></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">FAF</a>
                <!-- <a class="" href="#">Logout</a> -->
                <a class=" dropdown-item nav-link btn btn-light" id="logout" href="<?php echo site_url()?>/users/logout"  style="float: right; margin-left: 950px">Sign Out</a>
              </div>
          </div>
          <?php }else{ ?>
            <div class="dropdown bg-dark"> 
            <a href="" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/female.jpg'?>"></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">FAF</a>
                <!-- <a class="" href="#">Logout</a> -->
                <a class=" dropdown-item nav-link btn btn-light" id="logout" href="<?php echo site_url()?>/users/logout"  style="float: right; margin-left: 950px">Sign Out</a>
              </div>
          </div>
          <?php } ?>&nbsp;
      </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container -->
  </nav> <!-- / .navbar -->
