
	<div class="container-fluid margin-bottom bg-light">
		<div class="container align-items-center" style="height: 500px;">
			<div style="height: 30%";></div>

			<?php if ( validation_errors() ): ?>
            <div class="alert alert-danger">
              <?php echo validation_errors() ?>
            </div>
            <?php endif; ?>

        	<div class="row" style="padding: 10px; margin: 20px;">
            	<div class="offset-md-3 col-md-4">
	            	<a href="#" class="card-link text-dark btn btn-color btn-lg" data-toggle="modal" data-target="#singleuserModal">Register as Single</a>
	            </div>
	            <div class="col-md-4">
	            	<button href="#" class="card-link text-dark btn btn-color btn-lg" data-toggle="modal" data-target="#marrieduserModal">Register as Married</button>
	            </div>
	        </div>
      	</div>

    </div>

    <!-- single user register modal pop up -->
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
      		 <div class="jumbotron jumbo-pad bg-white">
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


<!-- married user register modal pop up -->

<div class="modal fade" id="marrieduserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body container">
      		 <div class="jumbotron jumbo-pad bg-white">
	                <h4 class="text-center text-green">Create A New Account</h4>
	             </div>
                 <form id="login" action="<?php echo site_url() ?>user/married" method="POST" enctype="multipart/form-data">
					
                 	<div class="input-group">
		            <div class="custom-file">
		              <input type="file" class="custom-file-input" name="userfile" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
		              <label class="custom-file-label" for="inputGroupFile04">Choose picture</label>
		            </div>
		            <div class="input-group-append">
		            </div>
		          </div>
		           <img align="center" class="image" id="image" src="<?php echo site_url().'image/male.png'?>">

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
				     <input type="text" class="form-control" name="spouse_first_name" placeholder="Spouse First Name" style="border-width: 0px 0px 1px;">
				   </div>

				   <div class="form-group">
				     <input type="text" class="form-control" name="spouse_other_name" placeholder="Spouse Other Name" style="border-width: 0px 0px 1px;">
				   </div>

				   <div class="form-group">
				     <input type="text" class="form-control" name="short_description" placeholder="Short Description" style="border-width: 0px 0px 1px;">
				   </div>

				   <div class="form-group">
				      <input type="email" class="form-control" name="email" placeholder="Email" style="border-width: 0px 0px 1px;">
				    </div>

				    <div class="form-group">
				     <input type="text" class="form-control" name="spouse_email" placeholder="Spouse email" style="border-width: 0px 0px 1px;">
				   </div>
				  <!-- 
				  <div class="form-group">
				     <input type="radio" class="" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;
				     <input type="radio" class="" name="gender" value="female"> Female
				  </div>
 -->
				  <div class="form-group">
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
	                  <select class="form-control" name="spouse_marital_status" style="border-width: 0px 0px 1px;">
	                    <option>Select Spouse Marital Status</option>
	                    <option>Unmarried</option>
	                    <option>Married</option>
	                    <option>Divorce</option>
	                    <option>Widow</option>
	                    <option>Not interested</option>
	                  </select>
	              </div>

	              <div class="form-group">
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
				     <select class="form-control" name="spouse_age_range" style="border-width: 0px 0px 1px;">
	                    <option>Select Spouse Age Range</option>
	                    <option>18 - 25</option>
	                    <option>26 - 35</option>
	                    <option>36 -45</option>
	                    <option>45 and above</option>
	                    <option>Not interested</option>
	                  </select>
				  </div>

				  <div class="form-group">
				     <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" style="border-width: 0px 0px 1px;">
				  </div>

				  <div class="form-group">
				     <input type="tel" class="form-control" name="spouse_phone_number" placeholder="Phone Number" style="border-width: 0px 0px 1px;">
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
	                  <select class="form-control" name="spouse_religion" style="border-width: 0px 0px 1px;">
	                    <option>Select Spouse Religion</option>
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

	              <div class="form-group">
	                  <select class="form-control" name="spouse_occupation" style="border-width: 0px 0px 1px;">
	                    <option>Select Spouse Occupation</option>
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
				    </div>
				    <div class="form-group col-md-6">
				      <input id="confirm" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" style="border-width: 0px 0px 1px;">
				      <p id="match"></p>
				    </div>
				   </div>
                    <button class="list-group-item list-group-item-action btn-color btn btn-rad text-center text-white" type="submit">Register</button>
				    <input id="role" type="hidden" class="form-control" name="role_id" value="03">
                  </form>
                 <div class="align-items-center margin-bottom"> <p>Are you a member? <a href="login" class="btn">Login</a></p></div>

            </div>
      	</div>
    </div>
  </div>
</div>