
<div class="content-wrapper"> 
  
  <section class="content">
     <div class="row">

        <div class="col-md-8" >
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


          <!-- Post box start here -->
              <form action="<?php echo site_url() ?>user/comunity" method="POST" class="margin">
                <div class="box-footer input-group">
                    <input type="hidden" id="userId" class="form-control" name="user_id" value="<?php echo $this->session->user_data->id ?>" >
                    <!-- <input type="hidden" class="form-control" name="username" value="<?php ?>"> -->
                    <input type="hidden" class="form-control" name="post_date" value="<?php echo date('d/m/Y') ?>">
                    <input type="text" name="post" class="form-control" style=" border-width: 0px 0px 1px;" placeholder="What's on your mind">
                    
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-send"></i></button>
                    </span>
                </div>
              </form>

              <br>
              <!-- post box end here -->

              <!-- Loop of All the posts in the communty database start here -->
            <?php $userList = $this->user->get_comunity();
            	if(isset($page_data)){
            		$users = $page_data;
            	}else{
            		$users = $userList;
            	}
            	if(isset($users)){
            		foreach ($users as $key ): 
                  $username = $this->UserModel->GetName($key->user_id);
            			?>
				<div class="card">
					<div class="card-body">
			    	<h6 class="card-subtitle mb-2"><?php echo $key->post; ?></h6>
			   	 	<p class="card-text">Posted bY: <?php  echo($username). " On ". $key->post_date ?> </p>
			  	</div>
          
                
          <hr>
          <!-- buttons start here -->
          <div> &nbsp;
            
            <a class="btn btn-light" href="<?php echo base_url('users/like_counter/') .$key->id; ?>">
              <i class="fa fa-thumbs-up fa-lg"></i>Like
              <span class="badge badge-light"><?php $count = $this->user->get_like_count_no($key->id); 
                echo $counter = count($count);
              ?></span>
            </a>&nbsp;&nbsp;

            <a class="btn btn-light" href="<?php echo base_url('communities/') .$key->post_id; ?>">
              <i class="fa fa-comment fa-lg"></i> View comments
              <span class="badge badge-light"><?php echo $key->comment_count?></span>
            </a>
            
          </div>
          <!-- buttons end here -->
				</div> <br>

	<?php endforeach;
		}else{
			echo "No Result Found";
		}
	 ?>
<!-- Loops end here -->
    </div>

<!-- </div> -->

<!-- user profile modal pop up -->
<!-- <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
      				<img style="width: 150px; height: 150px;" class="thumbnail" src="<?php //echo site_url('uploads/'.$this->session->userdata('user_data')->user_id.'.jpg')?>">
      			</div>
      			<div class="col-md-8">
      				<p><?php //echo ucfirst($key->first_name ." " .$key->last_name); ?></p>
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
</div> -->

<!-- <?php //foreach ($userList as $key ): ?> -->
    <!-- friends profile modal pop up -->
<!-- <div class="modal fade" id="<?php// echo $key->user_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
      				<img style="width: 200px; height: 200px;" class="thumbnail" src="<?php //echo site_url('uploads/'.$key->user_id.'.jpg')?>">
      			</div>
      		</div>
      	</div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<?php //endforeach;?> -->