
	<div class="container-fluid margin-bottom bg-light">
      <div class="col-md-4 offset-md-4" >
        <div class="row">
          <div class="col-md-12" style="background-color: ghostwhite; padding-top: 5px; padding-bottom: 5px; margin-top: 30px; border-radius: 3px;">
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
                 <form id="login" action="<?php echo site_url() ?>user/register" method="POST">
                      
                  <!-- <div class="form-row"> -->
				   <div class="form-group">
				     <!-- <label for="fist_name">First Name</label> -->
				     <input type="text" class="form-control" name="first_name" placeholder="First Name">
				   </div>
				    <div class="form-group">
				      <!-- <label for="last_name">Last Name</label> -->
				      <input type="last_name" class="form-control" name="last_name" placeholder="Last Name">
				    </div>
				  <!-- </div> -->
				  
				   <div class="form-group">
				     <!-- <label for="other_name">Other Name</label> -->
				     <input type="text" class="form-control" name="other_name" placeholder="Other Name">
				   </div>

				   <div class="form-group">
				      <!-- <label for="email">Email</label> -->
				      <input type="email" class="form-control" name="email" placeholder="Email">
				    </div>
				  

				  <div class="form-group">
				     <!-- <label for="phone_number">Gender</label><br> -->
				     <input type="radio" class="" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;
				     <input type="radio" class="" name="gender" value="female"> Female
				  </div>

				  <div class="form-group">
	                  <!-- <label>Marital Status</label> -->
	                  <select class="form-control" name="marital_status">
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
				     <select class="form-control" name="age_range">
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
				     <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
				  </div>

				  <div class="form-group">
	                  <!-- <label>Religion</label> -->
	                  <select class="form-control" name="religion">
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
	                  <select class="form-control" name="occupation">
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
				      <input type="password" class="form-control" name="password" placeholder="Password">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
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
