
	<div class="container-fluid margin-bottom bg-green">
      <div class="col-md-4 offset-md-7" >
        <div class="row">
          <div class="col-md-12" style="background-color: white; padding-top: 5px; padding-bottom: 5px; margin-top: 100px; border-radius: 3px;">
            <div class="list-group" id="myList" role="tablist">

			<?php if ( validation_errors() ): ?>
            <div class="alert alert-danger">
              <?php echo validation_errors() ?>
            </div>
            <?php endif; ?>

			
			<div class="list-group" id="myList" role="tablist">
              <div class="list-group" id="myList" role="tablist">
              <div class="jumbotron jumbo-pad bg-white">
                <h1 class="text-center text-green">Register</h1>
              </div>
                 <form id="login" action="<?php echo site_url() ?>user/register" method="POST">
                      
                  <div class="form-row">
				   <div class="form-group col-md-6">
				     <label for="fist_name">First Name</label>
				     <input type="text" class="form-control" name="first_name" placeholder="First Name">
				   </div>
				    <div class="form-group col-md-6">
				      <label for="last_name">Last Name</label>
				      <input type="last_name" class="form-control" name="last_name" placeholder="Last Name">
				    </div>
				  </div>
				  
				   <div class="form-group">
				     <label for="other_name">Other Name</label>
				     <input type="text" class="form-control" name="other_name" placeholder="Other Name">
				   </div>

				   <div class="form-group">
				      <label for="email">Email</label>
				      <input type="email" class="form-control" name="email" placeholder="Email">
				    </div>
				  

				  <div class="form-group">
				     <label for="phone_number">Gender</label><br>
				     <input type="radio" class="" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;
				     <input type="radio" class="" name="gender" value="female"> Female
				  </div>

				  <div class="form-group">
	                  <label>Marital Status</label>
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
				     <label for="phone_number">Age Range</label><br>
				     <span>18 - 25</span>&nbsp;<input type="radio" class="" name="age_range" value="young"> <br>
				     <span>26 - 35</span>&nbsp;<input type="radio" class="" name="age_range" value="adult"> <br>
				     <span>36 - 45</span>&nbsp;<input type="radio" class="" name="age_range" value="old"> <br>
				     <span>46 and Above</span>&nbsp;<input type="radio" class="" name="gender" value="older">
				  </div>

				  <div class="form-group">
				     <label for="phone_number">Phone Number</label>
				     <input type="number" class="form-control" name="phone_number" placeholder="Phone Number">
				  </div>

				  <div class="form-group">
	                  <label>Religion</label>
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
	                  <label>Occupation</label>
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
				      <label for="password">Password</label>
				      <input type="hidden" class="form-control" name="user_id" value="<?php echo random_string('alnum', 10); ?>">
				      <input type="password" class="form-control" name="password" placeholder="Password">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="confirm_password">Confirm Password</label>
				      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
				    </div>
				   </div>
                      
                    <button class="list-group-item list-group-item-action btn-dark text-center active" type="submit">Register</button>
                        <p>Already register <a href="login" class="btn">Login</a></p>
                  </form>
                 </div>


            </div>
          </div>
        </div>
      </div>
    </div>
