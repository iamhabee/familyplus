<div class="container-fluid bg-light">
	<div class="img-container">
		<img src="<?php echo site_url().'image/family-plus-bkg1.jpg'?>" class="rounded" style="width: 100%; height: 500px;">
  	<div class="top-left margin">
	  	<?php if ($this->session->user_data->user_id.'.jpg' === null) {?>
  	  		<img class="card-image" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg') ?>" alt="Card image cap" style="width: 200px; height: 200px;">
			<button class="bottom-left"  data-toggle="modal" data-target="#exampleModalCenter"><span class="fa fa-camera"></span></button>
		<?php }else{ ?>
			<img class="card-image" src="<?php echo site_url() ?>image/image00.jpg" alt="Card image cap" style="width: 200px; height: 200px;">
			<button class="bottom-left"  data-toggle="modal" data-target="#exampleModalCenter"><span class="fa fa-camera"></span></button>
		<?php } ?>
	</div>
	<div class="center ">
		<h2 class="text-dark"><?php echo ucfirst($this->session->user_data->first_name). ' ' .ucfirst($this->session->user_data->last_name);?></h2>
		<p><?php echo $this->session->user_data->short_description; ?></p>
	</div>
	</div>

<?php
	$users = $this->session->user_list;
	// var_dump($users);
	foreach ($users as $key ): 
		if ($key == $this->session->user_data) {
			continue;
		}?>
	
	<div class="card margin-bottom">
		<div class="card-body">
	    	<h5 class="card-title"><?php echo ucfirst($key->first_name ." " .$key->last_name); ?></h5>
	    	<h6 class="card-subtitle mb-2 text-muted"><?php echo ($key->marital_status); ?></h6>
	   	 	<p class="card-text"><?php echo ($key->short_description); ?></p>
   	 	  	<img class="card-image" src="<?php echo site_url('uploads/'.$key->user_id.'.jpg') ?>" alt="Card image cap">
	    	<hr>
	    	<div>
	    		<a href="#" class="card-link">Add <span class="badge badge-light">4</span></a>
	    		<!-- <a href="#" class="card-link">I am intrested <span class="badge badge-light">4</span></a> -->
	  		</div>
	  </div>
	</div>

	<?php endforeach ?>

</div>

    <!-- modal pop up -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Change Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      	<?php echo form_open_multipart('users/upload_picture'); ?>
<!--         <form method="POST" action="<?php //echo site_url().'users/update_image'?>" enctype="multipart/form-data"> -->
         <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="userfile" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
              <label class="custom-file-label" for="inputGroupFile04">Choose picture</label>
            </div>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Update</button>
            </div>
          </div>
           <img align="center" class="image" id="image" src="<?php echo site_url().'image/male.png'?>">
        <!-- </form> -->
        <?php echo form_close();?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>