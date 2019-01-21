   <div class="container-fluid bg-green">
      <div class="col-md-4 offset-md-7" >
        <div class="row">
          <div class="col-md-12 margin margin-bottom" style="background-color: white; margin-top: 140px; padding-bottom: 5px; border-radius: 5px;">

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
              <div class="jumbotron jumbo-pad bg-white">
                <h1 class="text-center text-green">Login</h1>
              </div>
              <!-- <button class="list-group-item list-group-item-action btn-danger active" id="login-btn">LOGIN</button> -->
                  <form action="<?php echo site_url() ?>user/login" method="POST">
                      
                       <div class="form-group">
                          <label for="email">E-mail</label>
                          <input type="email" class="form-control" name="email" placeholder="E-mail">
                       </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password">
                          <input type="hidden" class="form-control" value="<?php set_value($this->session->tempdata('rfrom'), 'dashboard') ?>" name="rfrom" placeholder="Password">
                        </div>
                        <input type="checkbox" name="status" value="1"> Keep me signed in<br>
                        <p>If you are a new member <a href="signup" class="btn">Sign up</a></p>
                      <button class="list-group-item list-group-item-action btn-dark text-center active" type="submit">Login</button>
                  </form>
              <!-- <button class="list-group-item list-group-item-action active btn-danger" id="register-btn" style="margin-top: 50px;">REGISTER</button>
 -->
              

            </div>
          </div>
        </div>
      </div>
    </div>
  <!--   <?php //var_dump($this->session->userdata()); ?> -->