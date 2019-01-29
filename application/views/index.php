<!doctype html>
<html lang="en">
  <head>
    <title>FamilyPlus</title>
    <?php  echo link_tag('css/bootstrap.css'); ?>
    <?php  echo link_tag('css/main.css'); ?>
    <?php  echo link_tag('css/offcanvas.css'); ?>
    <?php  echo link_tag('fontawesome/css/all.min.css'); ?>
    <?php  echo link_tag('link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Alegreya|Cuprum|Pacifico" rel="stylesheet"'); ?>
   <!--  <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="css/offcanvas.css"> -->
    <meta  name="viewport" content="width=device-width, initial-scale = 1" shrink-to-fit="no">
  </head>
  <body class="bg-white">
  <div id="demo-content">

    <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>


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
        $sex = $this->session->user_data->gender;
        if ($sex == "male") { ?>
          <div class="dropdown"> 
            <a href="" class="dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/male.png'?>"></a>
              <div class="dropdown-menu text-color" >
                <a class="dropdown-item text-color" href="<?php echo site_url()?>profile" ><?php echo $this->session->user_data->first_name; ?></a>
                <a class="dropdown-item text-color" href="<?php echo site_url()?>faf" >FAF</a>
                <a class="dropdown-item text-color" id="logout" href="<?php echo site_url()?>logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php }else{ ?>
            <div class="dropdown bg-white"> 
            <a href="" class="dropdown-toggle bg-dark"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="width: 50px; height: 50px; border-radius: 50px;" src="<?php echo site_url().'image/female.jpg'?>"></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn text-color" href="<?php echo site_url()?>/dashboard/profile" ><?php echo $this->session->user_data->first_name; ?></a>
                <a class="dropdown-item btn text-color" href="<?php echo site_url()?>/dashboard/faf" >FAF</a>
                <a class="dropdown-item btn text-color" id="logout" href="<?php echo site_url()?>/users/logout"  style="float: right; margin-left: 950px">Log Out</a>
              </div>
          </div>
          <?php } else:  ?>
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


<!-- slide container begin -->
	<div class="container-fluid" style=" margin-top: 0px; padding-right: 0px; padding-left: 0px;">
          <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner img-height">
              <div class="carousel-item active" style="background: white; z-index: 5;">
            	<img class=" w-100" height="500" src="<?php echo site_url() ?>image/image06.jpg" alt="First slide">
            	<div class="carousel-caption d-none d-md-block" style="top: 150px;">

					<h1 class=" text-center text-color"> A safe place to meet your Better Half</h1>
					<p class=" text-center text-dark">..THE SUNNAH WAY</p>
					<!-- Button -->
					<div class="text-center">
						<a href="signup" class="btn btn-light btn-rad text-dark">Get Started</a>
					</div>
				</div>
              </div>
              <div class="carousel-item" style="background: purple; z-index: 5;">
            	<img class=" w-100" height="500" src="<?php echo site_url() ?>image/image04.jpg" alt="First slide">
            	<div class="carousel-caption d-none d-md-block" style="top: 150px;">
					<h1 class=" text-center text-color"> Take your relationship to the next Level </h1>
					<p class=" text-center text-dark">..THE SUNNAH WAY</p>
					<!-- Button -->
					<div class="text-center">
						<a href="signup" class="btn btn-light btn-rad text-dark">Get Started</a>
					</div>
				</div>
              </div>
              <div class="carousel-item" style="background: purple; z-index: 5;">
            	<img class=" w-100" height="500" src="<?php echo site_url() ?>image/image05.jpg" alt="First slide">
            	<div class="carousel-caption d-none d-md-block" style="top: 150px;">
					<h1 class=" text-center text-color">A safe place to resolve family matters</h1>
					<p class=" text-center text-dark">..THE SUNNAH WAY</p>
					<div class="text-center">
						<a href="signup" class="btn btn-light btn-rad text-dark">Get Started</a>
					</div>
				</div>
              </div>
            </div>
          </div>
    </div>
    <!-- /slider end -->

  	<div class="container-fluid bg-light margin-bottom">
  		<div class="jumbotron jumbo-pad bg-light">
  			<h1 class="text-center">With Family plus your Spouse Search has just got better</h1>
  		</div>
  		<div class="row">
  			<div class="col-md-4">
  				<div class="card align-items-center" style="width: 100%;">
			        <img style="height: 200PX; width: 200px; border-radius: 200px;" src="<?php echo site_url() ?>image/image01.jpg" alt="Card image cap">
			        <div class="card-body">
			        	<h5 class="card-title text-center">Matchmaking</h5>
			        	<h6 class="card-subtitle mb-2 text-muted text-center">We help to match make the perfect singles who are seriously searching and ready for marriage in a sunnah way</h6>
			        </div>
			    </div>
  			</div>
  			<div class="col-md-4">
  				<div class="card align-items-center" style="width: 100%;">
			        <img style="height: 200PX; width: 200px; border-radius: 200px;" src="<?php echo site_url() ?>image/image02.jpg" alt="Card image cap">
			        <div class="card-body">
			        	<h5 class="card-title text-center">Consultation</h5>
			        	<h6 class="card-subtitle mb-2 text-muted text-center">Get a council from highly enthusiast scholars around the world to know the right step next to take in your relationship</h6>
			        </div>
			    </div>
  			</div>
  			<div class="col-md-4">
  				<div class="card align-items-center" style="width: 100%;">
			        <img style="height: 200PX; width: 200px; border-radius: 200px;" src="<?php echo site_url() ?>image/image03.jpg" alt="Card image cap">
			        <div class="card-body">
			        	<h5 class="card-title text-center">Marital Issues</h5>
			        	<h6 class="card-subtitle mb-2 text-muted text-center">Meet experienced married people and solved any marital issues that can ruin your relationship</h6>
			        </div>
			    </div>
  			</div>
  		</div>
  	</div>
  	<div class="container-fluid">
       	<img class=" w-100" height="500" src="<?php echo site_url() ?>image/image7.jpg" alt="First slide">
  	</div>
  	<div class="container-fluid margin">
  		<div class="row margin-bottom">
  			<div class="col-md-6 text-center">
  				<h1 class="text-dark">Need a Partner?</h1>
  				<p class="text-dark">This session would have scheduled date for Pre-Marriage Seminars and Counsellors</p>
  				<a href="" class="btn btn-light btn-rad text-dark">Learn more</a>
  			</div>
  			<div class="col-md-6 text-center">
  				<h1 class="text-dark">About to Wed?</h1>
  				<p class="text-dark">Here we also want to take the spousal search request of all members that is interested. Details to be taken here would include</p>
  				<a href="" class="btn btn-light btn-rad text-dark">Learn more</a>
  			</div>
  		</div>
  	</div>
  	<div class="container-fluid margin-bottom">
       	<img class=" w-100" height="400" src="<?php echo site_url() ?>image/image6.jpg" alt="First slide">
  	</div>
  	<div class="container-fluid text-center text-dark margin-bottom">
  		<h1>FamilyPlus Connect</h1>
  		<p>
  			Connect and Meet-Up with other Families. Interact and even share business Ideas Exclusive to our special members.
		</p>
  	</div>
  	<div class="container-fluid jumbotron btn-color text-center">
		<h3 class="margin-bottom text-white"> Jion us now. Click here to <a href="signup" class="btn btn-rad btn-light text-dark">Get Started</a></h3>
  	</div>
  <!-- </div> -->

      <div class="container-fluid bg-white fixed-div-bottom margin">
        <footer class="fixed-footer text-center text-secondary">
          <p>&copy; TechEnd 2018 copyright reserved</p>
        </footer>
      </div>
  </div>



      <?php echo script_tag('js/jquery.js'); ?>
      <?php echo script_tag('js/bootstrap.js'); ?>
      <?php echo script_tag('js/main.js'); ?>
     <?php echo script_tag('js/dash_main.js'); ?>
     <?php echo script_tag('js/modernizr.min.js'); ?>
      <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
    <!-- <script type="text/javascript" src="<?php current_?>js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/main.js"></script> -->
  </body>
</html>