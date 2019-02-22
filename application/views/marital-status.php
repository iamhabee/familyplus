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
            <input type="hidden" style="width: 30%" class="form-control" name="created_by" value="<?php echo $this->session->user_data->title." " .$this->session->user_data->first_name ?>" placeholder="Title">
            <textarea style="margin: 3px 10px 0px 5px; width: 80%; height: 100px;" name="article">Marital Issues Article</textarea>
            <button class="btn btn-color btn-sm" type="submit"> Submit</button>
          </form> 
          <?php }
           $users = $this->db->get('maritalissues')->result(); 
              if ($users) {
            foreach ($users as $key ): ?>
                  <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo ucfirst($key->title); ?></h3>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $key->description; ?>  <a href="#" class="card-link text-color btn-sm" data-toggle="modal" data-target="#">Read full story</a></h6>
                        <hr>
                        <span style="display: inline;"><p class="card-subtitle mb-2 text-muted">created by<?php echo ': '. $key->created_by; ?></p><p class="card-subtitle mb-2 text-muted"><?php echo $key->date; ?></p></span>
                          <a href="#" class="card-link text-white btn btn-color btn-sm" data-toggle="modal" data-target="#">Jazakumullahu</a>
                          <a href="#" class="card-link text-white btn btn-danger btn-sm" data-toggle="modal" data-target="#"><i class="fa fa-comment"></i>Questions</a>
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

