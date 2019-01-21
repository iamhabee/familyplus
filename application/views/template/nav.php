
<!--     <div class="container-fluid fixed-div bg-dark "> -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-light">
    <div class="container">
      <a href="<?php echo base_url()?>page"></a><img src="<?php echo site_url() ?>image/family-plus.png" class="logo" alt="Conmpany Name"> &nbsp; &nbsp;
      <a href="<?php echo base_url()?>page" class="navbar-brand text-dark">Family plus</a>

      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if ( current_url() == base_url()): ?>        
        <ul class="navbar-nav ml-auto">
          <?php if (isset($this->session->user_data)):  ?>
          <li class="nav-item"><a class="nav-link text-dark fa fa-user tooltip-test" title="Login" href="login"></a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-dark fa fa-sign-out-alt tooltip-test" title="signup" href="signup" ></a></li>    
           <?php else:  ?>
          <li class="nav-item"><a class="nav-link text-dark fa fa-user tooltip-test" title="Login" href="login"></a></li>&nbsp; &nbsp; &nbsp;
          <li class="nav-item"><a class="nav-link text-dark fa fa-sign-out-alt tooltip-test" title="signup" href="signup" ></a></li>    
           <?php endif;  ?>
        </ul>
      <?php endif; ?> 
      </div>
    </div>
  </nav>
    <!-- </div> -->
