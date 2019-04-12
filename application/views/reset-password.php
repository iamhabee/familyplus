

    <div class="container-fluid margin margin-bottom bg-light">
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
              <div class="jumbotron jumbo-pad bg-white"> <h4 class="text-center text-green">Provide your email below to reset your password </h4> </div>
              <form class="margin-bottom" action="<?php echo site_url() ?>user/resetPassword" method="POST">
                  
                   <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input id="email" type="text" style="border-width: 0px 0px 1px;" class="form-control" name="email" placeholder="Email">
                   </div>
                      
                  <button class="list-group-item margin list-group-item-action btn-rad btn btn-color text-white text-center" type="submit">Reset</button>
              </form>
              
           </div>
          </div>
        </div>
      </div>
        <div class="align-items-center"> <p class="text-center">Don't have an account? <a href="signup" class="btn">Sign up</a></p></div>
    </div>
  <!--   <?php //var_dump($this->session->userdata()); ?> -->