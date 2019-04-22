<div class="content-wrapper"> 
  <section class="content">
     	<div class="row">
     		<div class="col-md-8">
     			<?php $userList = $this->db->get('familyplus')->result(); 
                    foreach ($userList as $key ):  
                    if ($key->role_id !== "02") {
                       continue;
                      }?>
     			<div class="card margin" >
				    <div class="card-body">
				      <h4 class="card-title"><?php echo $key->title.' '.$key->first_name.' '. $key->last_name ?></h4>
				      <p class="card-text"><?php echo $key->short_description ?></p>
				      <p class="card-text"><?php echo $key->occupation ?></p>
				      <p class="card-text"><?php echo $key->marital_status ?></p>
				      <p class="card-text"><?php echo $key->gender ?></p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				    </div>
<!-- 				    <img class="card-img-bottom" src="img_avatar6.png" alt="Card image" style="width:100%"> -->
			  	</div>
			  	<?php endforeach;?>
			</div>