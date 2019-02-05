

        <!-- begining of main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
        <div class="box-body">
          <div class="row">
        <!-- left column -->
        <div class="col-lg-12">
          <a href="#" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#singleuserModal">ADD NEW USER</a><br>
          <!--TABLE START -->
          <div class="table-responsive">
            <table class="table-responsive table table-hover table-boardered table-striped">
              <tr>
                <th>S/NO</th>
                <th>Firstname</th>
                <th>Lastname</th>                
                <th>Othername</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Number</th>
                <th>User ID</th>
                <th>Description</th>
                <th>MaritalStatus</th>
                <th colspan="2">Action</th>
              </tr>
              <?php 
                $no = 0;
                $users = $this->db->get('familyplus')->result();
                if ($users) {
                    foreach ($users as $key ):
                      if ($key->role_id == 04) {
                      $no++;
               ?> 
                <tr>
                <td> <?php echo $no; ?></td>
                <td><?php echo ucfirst($key->first_name); ?></td>
                <td><?php echo ucfirst($key->last_name); ?></td>
                <td><?php echo ucfirst($key->other_name); ?></td>
                <td><?php echo ucfirst($key->email); ?></td>
                <td><?php echo ucfirst($key->gender); ?></td>
                <td><?php echo ucfirst($key->phone_number); ?></td>
                <td><?php echo ucfirst($key->user_id); ?></td>
                <td><?php echo ucfirst($key->short_description); ?></td>
                <td><?php echo ucfirst($key->marital_status); ?></td> 
                <!-- <td><?php //echo ucfirst($key->first_name ." " .$key->last_name); ?></td> -->
                <td>
                  <a href="admin_edit?id=<?php echo $key->id; ?>" class="btn btn-primary btn-sm">EDIT</a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/delete/'). $key->id ?>" class="btn btn-danger btn-sm delete-btn"> DELETE</a>
                </td>
              </tr>
            <?php }
            endforeach ;
          } else{

            ?>
            <tr><td colspan="9"><b style="color: red">NO RECORDS FOUND!!!</b></td></tr> 
            <?php } ?>
            </table>
          </div>
    </section>
        <!-- End of main content -->
    </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Add user Modal-->
 <div class="modal fade" id="singleuserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body container">
           <div class="jumbo-pad bg-white">
                  <h4 class="text-center text-green">Create A New Account</h4>
               </div>
                 <form id="login" action="<?php echo site_url() ?>user/single" method="POST" enctype="multipart/form-data">
          
                  <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="userfile" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                  <label class="custom-file-label" for="inputGroupFile04">Choose picture</label>
                </div>
                <div class="input-group-append">
                </div>
              </div>
               <img align="center" class="image" id="image" src="<?php echo site_url().'image/male.png'?>">
                      
                  <!-- <div class="form-row"> -->
           <div class="form-group">
             <!-- <label for="fist_name">First Name</label> -->
             <input type="text" class="form-control" name="first_name" placeholder="First Name" style="border-width: 0px 0px 1px;">
           </div>
            <div class="form-group">
              <!-- <label for="last_name">Last Name</label> -->
              <input type="last_name" class="form-control" name="last_name" placeholder="Last Name" style="border-width: 0px 0px 1px;">
            </div>
          <!-- </div> -->
          
           <div class="form-group">
             <!-- <label for="other_name">Other Name</label> -->
             <input type="text" class="form-control" name="other_name" placeholder="Other Name" style="border-width: 0px 0px 1px;">
           </div>

           <div class="form-group">
             <!-- <label for="other_name">Other Name</label> -->
             <input type="text" class="form-control" name="short_description" placeholder="Short Description" style="border-width: 0px 0px 1px;">
           </div>

           <div class="form-group">
              <!-- <label for="email">Email</label> -->
              <input type="email" class="form-control" name="email" placeholder="Email" style="border-width: 0px 0px 1px;">
            </div>
          

          <div class="form-group">
             <!-- <label for="phone_number">Gender</label><br> -->
             <input type="radio" class="" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;
             <input type="radio" class="" name="gender" value="female"> Female
          </div>

          <div class="form-group">
                    <!-- <label>Marital Status</label> -->
                    <select class="form-control" name="marital_status" style="border-width: 0px 0px 1px;">
                      <option>Select Marital Status</option>
                      <option>Unmarried</option>
                      <option>Married</option>
                      <option>Divorce</option>
                      <option>Widow</option>
                      <option>Not interested</option>
                    </select>
                </div>

                <div class="form-group">
             <!-- <label for="phone_number">Age Range</label><br> -->
             <select class="form-control" name="age_range" style="border-width: 0px 0px 1px;">
                      <option>Select Age Range</option>
                      <option>18 - 25</option>
                      <option>26 - 35</option>
                      <option>36 -45</option>
                      <option>45 and above</option>
                      <option>Not interested</option>
                    </select>

          </div>

          <div class="form-group">
             <!-- <label for="phone_number">Phone Number</label> -->
             <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" style="border-width: 0px 0px 1px;">
          </div>

          <div class="form-group">
                    <!-- <label>Religion</label> -->
                    <select class="form-control" name="religion" style="border-width: 0px 0px 1px;">
                      <option>Select Religion</option>
                      <option>Islam</option>
                      <option>Christian</option>
                      <option>Hindu</option>
                      <option>Budhaism</option>
                      <option>Others</option>
                      <option>Not interested</option>
                    </select>
                </div>

                <div class="form-group">
                    <!-- <label>Occupation</label> -->
                    <select class="form-control" name="occupation" style="border-width: 0px 0px 1px;">
                      <option>Select Occupation</option>
                      <option>Computer Progammer</option>
                      <option>Doctor</option>
                      <option>Lawyer</option>
                      <option>Soldier</option>
                      <option>Driver</option>
                      <option>Accountant</option>
                      <option>Nurse</option>
                      <option>Newscaster</option>
                      <option>Others</option>
                      <option>Not interested</option>
                    </select>
                </div>
        
            <div class="form-row">
            <div class="form-group col-md-6">
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" style="border-width: 0px 0px 1px;">
              <input id="role" type="hidden" class="form-control" name="role_id" value="04">
            </div>
            <div class="form-group col-md-6">
              <input id="confirm" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" style="border-width: 0px 0px 1px;">
              <p id="match"></p>
            </div>
           </div>
                    <button class="list-group-item list-group-item-action btn-color btn btn-rad text-center text-white" type="submit">Register</button>
                  </form>
                 <div class="align-items-center margin-bottom"> <p>Are you a member? <a href="login" class="btn">Login</a></p></div>

            </div>
        </div>
    </div>
  </div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
