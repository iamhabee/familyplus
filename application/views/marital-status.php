<div class="content-wrapper"> 
  <section class="content">
     <div class="row margin">
        <div class="col-md-8">
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
              <?php  if ($this->session->user_data->role_id == 02) {?>

            <form action="<?php echo site_url() ?>user/issue" method="POST">
            <input type="text" style="width: 30%" class="form-control" name="title" placeholder="Title"><br>
            <input type="text" style="width: 30%" class="form-control" name="description" placeholder="Description"><br>
            <input type="hidden" name="created_by" value="<?php echo $this->session->user_data->title." " .$this->session->user_data->first_name ?>" placeholder="Title">
            <input type="hidden"  name="date" value="<?php echo date('d/m/Y') ?>">
            <textarea style="margin: 3px 10px 0px 5px; width: 80%; height: 100px;" name="article">Marital Issues Article</textarea>
            <button class="btn btn-color btn-sm" type="submit"> Submit</button>
          </form> 
          <?php }
            $this->db->order_by('id', 'DESC');
           $users = $this->db->get('maritalissues')->result(); 
              if ($users) {
            foreach ($users as $key ): ?>
                  <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo ucfirst($key->title); ?></h3>
                        <h6 class="card-subtitle mb-2"><?php echo $key->description; ?>  <a href="<?php echo base_url();?>page/marriageArticle/<?php echo $key->id; ?>" class="card-link text-color btn-sm">Read full story</a></h6>
                        <hr>
                        <span style="display: inline;"><p class="card-subtitle mb-2 ">created by<?php echo ': '. $key->created_by; ?></p><p class="card-subtitle mb-2 text-muted"><?php echo $key->date; ?></p></span>
                          <a href="#" class="card-link text-white btn btn-color btn-sm" data-toggle="modal" data-target="#"><i class="fa fa-thumbs-up fa-lg"></i>Jazakumullahu<span class="badge badge-light" id="likeId"></span></a>
                          <!-- <a href="#" class="card-link text-white btn btn-danger btn-sm" data-toggle="modal" data-target="#"><i class="fa fa-comment"></i>Questions</a> -->
                      </div>
                  </div>   
            <?php 
            endforeach ;
          } else{?>

            <h1><b style="color: red">NO articles FOUND!!!</b></h1>
            <?php } ?>
        </div>
      </div>

  </section>
</div>