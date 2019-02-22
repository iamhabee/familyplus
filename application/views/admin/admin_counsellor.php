

        <!-- begining of main content -->
    <section class="content">

          <a href="#" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#counsellorsModal">ADD NEW Counsellor</a><br>
          <!--TABLE START -->
          <div class="table-responsive">
            <table class=" table table-hover table-boardered table-striped">
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
                <th colspan="2">Action</th>
              </tr>
              <?php 
                $no = 0;
                $users = $this->db->get('familyplus')->result();
                if ($users) {
                    foreach ($users as $key ):
                      if ($key->role_id == 02) :
                        
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
                <!-- <td><?php //echo ucfirst($key->first_name ." " .$key->last_name); ?></td> -->
                <td>
                  <a href="admin_edit.php?id=<?php echo $key->id; ?>" class="btn btn-primary btn-sm">EDIT</a>
                </td>
                <td>
                  <a href="admin_delete.php?id=<?php echo $key->id; ?>" class="btn btn-danger btn-sm delete-btn"> DELETE</a>
                </td>
              </tr>
            <?php endif;
            endforeach;
          } else{ ?>
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
  <div class="modal fade" id="counsellorsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body container">
           <div class=" jumbo-pad bg-white">
                  <h4 class="text-center text-green">Create A New Account</h4>
            </div>
            <form id="login" action="<?php echo site_url() ?>user/counsellor" method="POST" enctype="multipart/form-data">
                 <div class="form-group">
                    <select class="form-control" name="title" style="border-width: 0px 0px 1px;">
                      <option>Select Title</option>
                      <option>Mr & Mrs</option>
                      <option>Miss</option>
                      <option>Dr</option>
                      <option>Chief</option>
                      <option>Sheik</option>
                      <option>Msc</option>
                      <option>Phd</option>
                      <option>Professor</option>
                    </select>
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="first_name" placeholder="First Name" style="border-width: 0px 0px 1px;">
                 </div>
                  <div class="form-group">
                    <input type="last_name" class="form-control" name="last_name" placeholder="Last Name" style="border-width: 0px 0px 1px;">
                  </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="other_name" placeholder="Other Name" style="border-width: 0px 0px 1px;">
                 </div>

                 <div class="form-group">
                   <input type="text" class="form-control" name="short_description" placeholder="Short Description" style="border-width: 0px 0px 1px;">
                 </div>

                 <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" style="border-width: 0px 0px 1px;">
                  </div>
                

                <div class="form-group">
                   <input type="radio" class="" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;
                   <input type="radio" class="" name="gender" value="female"> Female
                </div>

                <div class="form-group">
                   <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" style="border-width: 0px 0px 1px;">
                </div>

                <div class="form-group">
                  <label> Courses </label><br>
                    <input type="checkbox" name="monday" value="Monday"> Monday<br>
                    <input type="checkbox" name="tuesday" value="Tuesdaay"> Tuesday<br>
                    <input type="checkbox" name="wednesday" value="Wednesday"> Wednesday<br>
                    <input type="checkbox" name="thursday" value="Thursday"> Thursday<br>
                    <input type="checkbox" name="friday" value="Friday"> Friday<br>
                    <input type="checkbox" name="saturday" value="Saturday"> Saturday<br>
                    <input type="checkbox" name="sunday" value="Sunday"> Sunday<br>
                </div>

                <div class="form-group">
                  <label> Courses </label><br>
                    <input type="checkbox" name="morning" value="10am to 12am"> Morning Session<br>
                    <input type="checkbox" name="afternoon" value="2pm to 4pm"> Afternoon Session<br>
                    <input type="checkbox" name="evening" value="8pm to 9pm"> Evening Session<br>
                </div>

                <div class="form-group">
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
                    <input id="role" type="hidden" class="form-control" name="role_id" value="02">
                  </div>
                  <div class="form-group col-md-6">
                    <input id="confirm" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" style="border-width: 0px 0px 1px;">
                    <p id="match"></p>
                  </div>
                 </div>
            <button class="list-group-item list-group-item-action btn text-center text-white" style="background-color: rgb(103,58,183); " type="submit">Register</button>
          </form>
          <div class="align-items-center margin-bottom"> <p>Are you a member? <a href="login" class="btn text-primary">Login</a></p></div>

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
 
