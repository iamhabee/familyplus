<aside class="main-sidebar btn-color">
  
  <!-- sidebar: style can be found in sidebar.less -->
  
  <section class="sidebar">
    
    <ul class="sidebar-menu text-white" data-widget="tree">
          <li class="header-menu">
            <h6>MENU</h6>
          </li>
          <li >
            <a href="dashboard" class="text-white">
              <i class="fa fa-globe"></i>
              <span>Community</span>
             <!--  <span class="badge badge-pill badge-warning">New</span> -->
            </a>
          </li>

          <li> 
            <a href="chat" class="text-white"> 
              <i class="fa fa-comment"></i> 
              <span>Consultation</span> 
            </a>
          </li>
          <li>
            <a href="maritalIssues" class="text-white">
              <i class="fa fa-user"></i>
              <span>Marital Issues</span>
            </a>
          </li>
          <li>
            <a href="connect" class="text-white">
              <i class="fa fa-globe"></i>
              <span>Connect</span>
            </a>
          </li>
          <?php if ($this->session->user_data->role_id == '02'): ?>
          <li>
            <a href="#" class="text-white">
              <i class="fa fa-book"></i>
              <span>Bio</span>
              <!-- <span class="badge badge-pill badge-primary">Beta</span> -->
            </a>
          </li>
          <?php endif ?>
          <!-- <li>
            <a href="#" class="text-white">
              <i class="fa fa-folder"></i>
              <span>Business</span>
            </a>
          </li> -->
          <li>
            <a href="about" class="text-white">
              <i class="fa fa-user-circle"></i>
              <span>About Us</span>
            </a>
          </li>
          <?php if ($this->session->user_data->role_id !== '02'): ?>
          <li>
            <a href="#" data-toggle="modal" data-target="#schedulerModal" class="text-white">
              <i class="fa fa-calendar"></i>
              <span>Scheduler</span>
            </a>
          </li>
          <?php endif ?>
          
          <li>
            <a href="#" class="text-white">
              <i class="fa fa-cog"></i>
              <span>Settings</span>
            </a>
          </li>
      
       
      
 
    </ul>
  </section>
  
  <!-- /.sidebar -->
  
</aside>


<div class="modal fade" id="schedulerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header btn-color">
        <h5 class="modal-title" id="exampleModalCenterTitle">Schedule A meeting with a Counsellor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body container">
          <?php $user_id = $this->session->user_data->id;
          $scheduler = $this->user->get_schedule($user_id);
          // var_dump($scheduler);
          if ($scheduler != NULL && $scheduler->status == 'pending') {
            $Schedule_time = 'The time remaining is'. $scheduler->time;
            ?>
          <h5>Your Schedule with the <?php echo $scheduler->counsellor;?> has not elapse, you can only meet our expert when you have no schedule on queue. <?=$Schedule_time ?> </h5> <br> Thank You.

        <?php }elseif ($scheduler != NULL && $scheduler->status == 'active') {?>
          <h5>You are currently chatting with the <?php echo $scheduler->counsellor;?>. You can make a new schedule once you complete your current meeting with <?php echo $scheduler->counsellor;?>. </h5> <br> Thank You.

       <?php } else{ ?>
         <form id="login" action="<?php echo site_url() ?>user/scheduler" method="POST">

           <div class="form-group">
             <input type="text" class="form-control" name="name" placeholder="Name" value="<?=$this->session->user_data->first_name. " ". $this->session->user_data->last_name;?>" style="border-width: 0px 0px 1px;">
           </div>

            <div class="form-group">
              <input type="text" class="form-control" name="description" placeholder="Description" style="border-width: 0px 0px 1px;">
            </div>

            <div class="form-group">
              <input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->user_data->id;?>" style="border-width: 0px 0px 1px;">
            </div>

            <div class="form-group">
            
                <select class="form-control counsellor-email" style="border-width: 0px 0px 1px;">
                  <option>Select Occupation</option>
                    <?php $userList = $this->db->get('familyplus')->result(); 
                    foreach ($userList as $key ):  
                    if ($key->role_id !== "02") {
                       continue;
                      }?>
                  <option class="counselloremail" title="<?php echo $key->email ?>"><?php echo $key->occupation ?></option>
                  <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
              <input type="email" class="form-control" id="counsellor_email" style="border-width: 0px 0px 1px;">
            </div>

            <div class="form-group">
              <input type="date" class="form-control" name="date" style="border-width: 0px 0px 1px;">
            </div>

            <div class="form-group">
            
                <select class="form-control" name="time" style="border-width: 0px 0px 1px;">
                  <option>Select Time</option>
                  <option value="10:00am">Morning</option>
                  <option value="02:30pm">Afternoon</option>
                  <option value="08:45pm">Night</option>
                </select>
            </div>

            <button class="list-group-item list-group-item-action btn-color btn btn-rad text-center text-white" type="submit">Submit</button>
          </form>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>