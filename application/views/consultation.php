   </nav>
  <main class="page-content">
   
	<?php $userList = $this->user->get_user();
	// var_dump($userList);
	if(isset($page_data)){
		$users = $page_data;
	}else{
		$users = $userList;
	}
	if(isset($users)){
		foreach ($users as $key ): 
			if ( $key->role_id !== "02") {
				continue;
			}?>
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
				    	<h5 class="card-title"><?php echo ucfirst($key->first_name ." " .$key->last_name); ?></h5>
				    	<h6 class="card-subtitle mb-2 text-muted"><?php echo ($key->occupation); ?></h6>
				   	 	<p class="card-text"><?php echo ($key->short_description); ?></p>
			   	 	  	<!-- <img class="card-image" src="<?php //echo site_url('uploads/'.$key->user_id.'.jpg') ?>" alt="Card image cap"> -->
				    	<hr>
				    		<a href="#" class="card-link text-dark btn btn-color btn-sm" data-toggle="modal" data-target="#<?php echo $key->user_id ?>">View full Profile</a>
				    		<a href="#" class="card-link text-dark btn btn-danger btn-sm" data-toggle="modal" data-target="#<?php echo $key->user_id ?>"><i class="fa fa-comment"></i>Send message</a>
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

<!-- user profile modal pop up -->
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
          <div class="row" style="margin-bottom: : 10px;">
            <div class="col-md-4 ">
              <img style="width: 150px; height: 150px;" class="thumbnail" src="<?php echo site_url('uploads/'.$this->session->userdata('user_data')->user_id.'.jpg')?>">
            </div>
            <div class="col-md-8">
              <p><?php echo ucfirst($key->first_name ." " .$key->last_name); ?></p>
                <div><span>Home address :</span></div>
                <div><span>Work :</span></div>
                <div><span>Post  :</span></div>
                <div><span>Dislikes :</span></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <h6>Contact Info</h6><hr>
                <div><span>Phone No :</span></div>
                <div><span>email :</span></div>
                <div><span>Website :</span></div>
                <div><span>Dislikes :</span></div>
            </div>
              <div class="container col-md-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Timeline</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <h6>Basic Info</h6><hr>
                      <div><span>Gender :</span></div>
                      <div><span>Age :</span></div>
                      <div><span>Likes :</span></div>
                      <div><span>Dislikes :</span></div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <h6> Info</h6><hr>
                      <div><span>Quotes :</span></div>
                      <div><span>Role model :</span></div>
                      <div><span>Mentor :</span></div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>


<?php foreach ($userList as $key ): ?>
    <!-- friends profile modal pop up -->
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
      				<img style="width: 200px; height: 200px;" class="thumbnail" src="<?php echo site_url('image/image00.jpg')?>">
      			</div>
      		</div>
      	</div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>