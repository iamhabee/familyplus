    <div class="container-fluid margin-bottom bg-light">
      <div class="col-md-4 offset-md-4" >
        <div class="row">
          <div class="col-md-12 " style="background-color: white; padding-top: 5px; padding-bottom: 15px; margin-top: 30px; border-radius: 5px;">
            <div class="list-group" id="myList" role="tablist">

            <?php if ( validation_errors() ): ?>
            <div class="alert alert-danger">
              <?php echo validation_errors() ?>
            </div>
            <?php endif; ?>

             <?php if ( $this->session->flashdata('msg') ): ?>
            <div class="alert alert-<?php echo $this->session->flashdata('flag')?>">
              <?php echo $this->session->flashdata('msg') ?>
            </div>
            <?php endif; ?>

            <div class="list-group" id="myList" role="tablist">
              <div class="jumbotron jumbo-pad bg-white"> <h4 class="text-center text-green">Log in to your account</h4> </div>
              <form class="margin-bottom" action="<?php echo site_url() ?>user/login" method="POST">
                  
                   <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input id="email" type="text" style="border-width: 0px 0px 1px;" class="form-control" name="email" placeholder="Email">
                   </div>
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" class="form-control" style="border-width: 0px 0px 1px;"  name="password" placeholder="Password">
                      <input type="hidden" class="form-control" value="<?php set_value($this->session->tempdata('rfrom'), 'dashboard') ?>" name="rfrom" placeholder="Password">

                    </div>   
                  <button class="list-group-item margin list-group-item-action btn-rad btn btn-color text-white text-center" type="submit">Login</button>
                  <a href="login" class="margin text-center">Forgot Password</a>
              </form>
              
           </div>
          </div>
        </div>
      </div>
        <div class="align-items-center"> <p class="text-center">Don't have an account? <a href="signup" class="btn">Sign up</a></p></div>
    </div>
  <!--   <?php //var_dump($this->session->userdata()); ?> -->