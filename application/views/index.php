<!doctype html>
<html lang="en">
  <head>
    <title>FamilyPlus</title>
    <?php  echo link_tag('css/bootstrap.css'); ?>
    <?php  echo link_tag('css/main.css'); ?>
    <?php  echo link_tag('css/offcanvas.css'); ?>
    <?php  echo link_tag('fontawesome/css/all.min.css'); ?>
  <link rel="shortcut icon" type="image/png" href="<?php echo site_url() ?>image/favicon.png">
    <!-- <? php // echo link_tag('https://fonts.googleapis.com/css?family=Kaushan+Script|Alegreya|Cuprum|Pacifico'); ?> -->
    <meta  name="viewport" content="width=device-width, initial-scale = 1" shrink-to-fit="no">
  </head>
  <body class="bg-white">
  <div id="demo-content">

    <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark blue">
    <div class="container-fluid">
      <a href="<?php echo base_url()?>"></a><img src="<?php echo site_url() ?>image/logo.png" class="logo" alt="Conmpany Name"> &nbsp; &nbsp;
      <a href="<?php echo base_url()?>" class="navbar-brand text-white">FamilyPlus</a>

      <button class="navbar-toggler blue" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Home" href="dashboard">Community</a></li>&nbsp; &nbsp; &nbsp;
          
          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Cosultation" href="chat">Consultatiion</a></li>&nbsp; &nbsp; &nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Marital-issues" href="maritalIssues">Marital Issues</a></li>&nbsp; &nbsp; &nbsp;

          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="About" href="about">About</a></li>&nbsp; &nbsp; &nbsp;
          
          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Connect" href="connect">Connect</a></li>&nbsp; &nbsp; &nbsp;
          
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
          <li class="nav-item"><a class="nav-link text-white tooltip-test" title="Login" href="login">Login</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-white btn btn-color tooltip-test" title="signup" href="signup" >Get Started</a></li>    
           <?php }  ?>
        </ul>
      <!-- <?php// endif; ?>  -->
      </div>
    </div>
  </nav>
    <!-- </div> -->

<!-- slide container begin -->
	<div class="container-fluid margin" style=" padding-right: 0px; padding-left: 0px;">
          <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner img-height">
              <div class="carousel-item active">
            	<img class=" w-100" height="500" src="<?php echo site_url() ?>image/image06.jpg" alt="First slide">
            	<div class="carousel-caption d-none d-md-block" style="top: 150px;">

          <h1 class=" text-center text-color"> WELCOME TO familyPlus</h1>
					<h3 class=" text-center text-dark"> A safe place to meet your Better Half</h3>
					<p class=" text-center text-dark">..THE SUNNAH WAY</p>
					<!-- Button -->
					<div class="text-center">
						<a href="signup" class="btn btn-light btn-rad text-dark">Get Started</a>
					</div>
				</div>
              </div>
              <div class="carousel-item">
            	<img class=" w-100" height="500" src="<?php echo site_url() ?>image/image04.jpg" alt="First slide">
            	<div class="carousel-caption d-none d-md-block" style="top: 150px;">
          <h1 class=" text-center text-color"> WELCOME TO familyPlus+</h3>
					<h3 class=" text-center text-dark"> Take your relationship to the next Level </h1>
					<p class=" text-center text-dark">..THE SUNNAH WAY</p>
					<!-- Button -->
					<div class="text-center">
						<a href="signup" class="btn btn-light btn-rad text-dark">Get Started</a>
					</div>
				</div>
              </div>
              <div class="carousel-item" >
            	<img class=" w-100" height="500" src="<?php echo site_url() ?>image/image05.jpg" alt="First slide">
            	<div class="carousel-caption d-none d-md-block" style="top: 150px;">
          <h1 class=" text-center text-color"> WELCOME TO familyPlus+</h1>
					<h3 class=" text-center text-dark">A safe place to resolve family matters</h3>
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
  			<h3 class="text-center">How It Works</h3>
  		</div>
  		<div class="row">
  			<div class="col-md-4">
  				<div class="card align-items-center" style="width: 100%;">
              <h5 class="card-title text-center">STEP 1</h5>
			        <img style="height: 200PX; width: 200px; border-radius: 200px;" src="<?php echo site_url() ?>image/image01.jpg" alt="Card image cap">
			        <div class="card-body">
			        	<h5 class="card-title text-center">CREATE</h5>
			        	<h6 class="card-subtitle mb-2 text-muted text-center">Register with us as Couple or as Single</h6>
			        </div>
			    </div>
  			</div>
  			<div class="col-md-4">
  				<div class="card align-items-center" style="width: 100%;">
              <h5 class="card-title text-center">STEP 2</h5>
			        <img style="height: 200PX; width: 200px; border-radius: 200px;" src="<?php echo site_url() ?>image/image02.jpg" alt="Card image cap">
			        <div class="card-body">
			        	<h5 class="card-title text-center">CHOOSE</h5>
			        	<h6 class="card-subtitle mb-2 text-muted text-center">Declare who and what you are looking for</h6>
			        </div>
			    </div>
  			</div>
  			<div class="col-md-4">
  				<div class="card align-items-center" style="width: 100%;">
              <h5 class="card-title text-center">STEP 3</h5>
			        <img style="height: 200PX; width: 200px; border-radius: 200px;" src="<?php echo site_url() ?>image/image03.jpg" alt="Card image cap">
			        <div class="card-body">
			        	<h5 class="card-title text-center"> CONNECT</h5>
			        	<h6 class="card-subtitle mb-2 text-muted text-center">Search and Connect with your best match</h6>
			        </div>
			    </div>
  			</div>
  		</div>
  	</div>
  	<div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
       	  <img class=" w-100" height="400" src="<?php echo site_url() ?>image/image7.jpg" alt="First slide">
        </div>
        <div class="col-md-6 text-center align-items-center">
          <div style="height: 25%"></div>
          <h3>WHY YOU SHOULD JOIN FAMILY PLUS</h3>
          <P>Our ethos is based upon the Quranic ayah in which Allah states "Women of Purity are for men of Purity and men of Purity are for women of Purity" (Quran 24:26) We believe that serving Allah SWT and actively seeking His pleasure is the ultimate foundation for success... and this can only be achieved when you marry someone who shares the same values and beliefs as you do. If that's something you believe in too, then join us today. Simply register now to find your pure match or learn more about how we can help you!</P>
        </div>
      </div>
  	</div>
  	<div class="container-fluid margin">
  		<div class="row margin-bottom">
  			<div class="col-md-6 text-center">
  				<h1 class="text-dark">NEED A PARTNER?</h1>
  				<p class="text-dark">Search and connect with your perfect match in the sunnah way</p>
  				<a href="signup" class="btn btn-light btn-rad text-dark">Get started</a>
  			</div>
  			<div class="col-md-6 text-center">
  				<h1 class="text-dark">MEET A COUNCILOR?</h1>
  				<p class="text-dark">Talk to the experts about your marital issues</p>
  				<a href="signup" class="btn btn-light btn-rad text-dark"> Get started</a>
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
		<h3 class="text-white"> Jion us now. Click here to <a href="signup" class="btn btn-rad btn-light text-dark">Get Started</a></h3>
  	</div>
  <!-- </div> -->

      <div class="container-fluid bg-white margin">
        <footer class=" text-center text-secondary">
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