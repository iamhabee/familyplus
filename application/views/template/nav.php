
<!--     <div class="container-fluid fixed-div bg-dark "> -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-light">
    <div class="container-fluid">
      <a href="<?php echo base_url()?>"></a><img src="<?php echo site_url() ?>image/logo.png" class="logo" alt="Conmpany Name"> &nbsp; &nbsp;
      <a href="<?php echo base_url()?>" class="navbar-brand text-color">FamilyPlus</a>

      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

          <?php if ($this->session->user_data) {
           if ($this->session->user_data->role_id !== '02') {?>
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Home" href="dashboard">Home</a></li>&nbsp; &nbsp; &nbsp;
           <?php }} ?>

          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Cosultation" href="consultation">Consultatiion</a></li>&nbsp; &nbsp; &nbsp;

          <?php if ($this->session->user_data) {
           if ($this->session->user_data->role_id !== '04') {?>
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Marital-issues" href="maritalIssues">Marital Issues</a></li>&nbsp; &nbsp; &nbsp;
          <?php }} ?>

          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="About" href="about">About</a></li>&nbsp; &nbsp; &nbsp;

          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Connect" href="connect">Connect</a></li>&nbsp; &nbsp; &nbsp;

        <?php if (!isset($this->session->user_data)):   ?>
          <li class="nav-item"><a class="nav-link text-color tooltip-test" title="Login" href="login">Login</a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-white btn btn-color tooltip-test" title="signup" href="signup" >Get Started</a></li>    
           <?php endif;  ?>
        </ul>
      <!-- <?php// endif; ?>  -->
      </div>
    </div>
  </nav>
    <!-- </div> -->
