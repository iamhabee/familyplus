
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
   
<?php

 $userList = $this->user->get_user();
	if(isset($page_data)){
		$users = $page_data;
	}else{
		$users = $userList;
	}
	if(isset($users)){
		foreach ($users as $key ): 
			if ($key == $this->session->user_data) {
				continue;
			}?>
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
				    	<h5 class="card-title"><?php echo ucfirst($key->first_name ." " .$key->last_name); ?></h5>
				    	<h6 class="card-subtitle mb-2 text-muted"><?php echo ($key->marital_status); ?></h6>
				   	 	<p class="card-text"><?php echo ($key->short_description); ?></p>
			   	 	  	<!-- <img class="card-image" src="<?php //echo site_url('uploads/'.$key->user_id.'.jpg') ?>" alt="Card image cap"> -->
				    	<hr>
				    		<a href="#" class="card-link text-dark btn btn-color btn-sm" data-toggle="modal" data-target="#<?php echo $key->user_id ?>">View full Profile</a>
				  	</div>
				</div>
			</div>
		</div>

	<?php endforeach;
		}else{
			echo "No Result Found";
		}
	 ?>
</main>
</div>
<!-- </div> -->

<!-- friends profile modal pop up -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body container">
      		<div class="row">
      			<div class="col-md-4">
      				<img style="width: 200px; height: 200px;" class="thumbnail" src="<?php echo site_url('uploads/'.$this->session->userdata('user_data')->user_id.'.jpg')?>">
      			</div>
      		</div>
      	</div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<?php foreach ($userList as $key ):

			?>
    <!-- user profile modal pop up -->
<div class="modal fade" id="<?php echo $key->user_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body container">
      		<div class="row">
      			<div class="col-md-4">
      				<img style="width: 200px; height: 200px;" class="thumbnail" src="<?php echo site_url('uploads/'.$key->user_id.'.jpg')?>">
      			</div>
      		</div>
      	</div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
