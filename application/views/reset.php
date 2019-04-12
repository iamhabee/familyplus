

    <div class="container-fluid margin margin-bottom bg-light">
      <div class="col-md-4 offset-md-4" >
        <div class="row">
          <div class="col-md-12 " style="background-color: white; padding-top: 5px; padding-bottom: 15px; margin-top: 30px; border-radius: 5px;">
            <div class="list-group" id="myList" role="tablist">

            <?php
              $id = $rec['id'];
             if ( validation_errors() ): ?>
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
              <div class="jumbotron jumbo-pad bg-white"> <h4 class="text-center text-green">Reset Password</h4> </div>
              <form class="margin-bottom" action="<?php echo site_url() ?>user/reset/<?php echo $id; ?>" method="POST">
                  
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input id="password" type="password" style="border-width: 0px 0px 1px;" class="form-control" name="password" placeholder="New Password">
                  </div>
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" id="confirm" style="border-width: 0px 0px 1px;"  name="confirm" placeholder="Confirm Password">
                  </div>
                  <p id="match"></p>
                  <button class="list-group-item margin list-group-item-action btn-rad btn btn-color text-white text-center" type="submit">Login</button>
              </form>
              
           </div>
          </div>
        </div>
      </div>
    </div>
  <!--   <?php //var_dump($this->session->userdata()); ?> -->