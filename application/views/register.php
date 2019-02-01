
	<div class="container-fluid margin-bottom bg-light">
      <div class="col-md-4 offset-md-4" >
        <div class="row bg-white">
          <div class="col-md-12" style=" padding-top: 5px; padding-bottom: 5px; margin-top: 30px; border-radius: 3px;">
            <div class="list-group" id="myList" role="tablist">

			<?php if ( validation_errors() ): ?>
            <div class="alert alert-danger">
              <?php echo validation_errors() ?>
            </div>
            <?php endif; ?>
			
			<!-- <div class="list-group" id="myList" role="tablist"> -->
              <div class="list-group" id="myList" role="tablist">
	             <div class="jumbotron jumbo-pad bg-white">
	                <h4 class="text-center text-green">Create an account</h4>
	             </div>
                 <form id="login" action="<?php echo site_url() ?>user/register" method="POST" enctype="multipart/form-data">
<div id="married"></div>
					
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

	               <div class="form-group">
	                  <!-- <label>Marital Status</label> -->
	                  <select class="form-control" name="role_id" id="married" style="border-width: 0px 0px 1px;">
	                    <option>Select Account Type</option>
	                    <?php $roles = $this->db->get('roles')->result()?>

	                    <?php foreach($roles as $role):?>
	                    	<?php if(strtolower($role->name) === 'admin' || strtolower($role->name) === 'councilor'): continue; else:?>
	                    	<option value="<?php echo $role->role_id ?>"><?php echo ucwords($role->name) ?></option>
	                    <?php endif;?>
	                    <?php endforeach;?>
	                  </select>
	              </div>

	              <!-- spouse information -->
	            
				<div id="couple" style="display: none">
					<fieldset>
	            	<legend>Spouse Information</legend>
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
	                  <!-- <label>Marital Status</label> -->
	                  <select class="form-control" name="role_id" style="border-width: 0px 0px 1px;">
	                    <option>Select Account Type</option>
	                    <?php $roles = $this->db->get('roles')->result()?>

	                    <?php foreach($roles as $role):?>
	                    	<?php if(strtolower($role->name) === 'admin' || strtolower($role->name) === 'councilor'): continue; else:?>
	                    	<option value="<?php echo $role->role_id ?>"><?php echo ucwords($role->name) ?></option>
	                    <?php endif;?>
	                    <?php endforeach;?>
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
	              	</fieldset>
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
                  </form>
                 <div class="align-items-center margin-bottom"> <p>Are you a member? <a href="login" class="btn">Login</a></p></div>

            </div>
          </div>
        </div>
      </div>
    </div>
