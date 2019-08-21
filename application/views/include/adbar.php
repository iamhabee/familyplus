 		<?php $ad = $this->db->get('banner',1, 1)->result(); 
	        foreach ($ad as $key ):  
	    ?>
 		<div class="col-md-4">
 			<img style="width: 100%; height: 500px;" src="<?php echo site_url('banner/'.$key->image_path)?>">
 			<div class="jumbotron bg-seccondary "><h1 class="text-danger">Place Your Ad here</h1></div>
 		</div>
 	<?php endforeach; ?>

 	</div>
  </section>
</div>