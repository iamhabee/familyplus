
        <!-- begining of main content -->
    <section class="content">
        
        <form id="login" action="<?php echo site_url() ?>user/issues" method="POST">
          <input type="text" style="width: 30%" class="form-control" name="title" placeholder="Title"><br>
          <input type="text" style="width: 30%" class="form-control" name="description" placeholder="Description"><br>
          <input type="hidden" style="width: 30%" class="form-control" name="created_by" value="<?php echo $this->session->admin_data->title." " .$this->session->admin_data->name ?>" placeholder="Title">
          <textarea style="margin: 3px 10px 0px 5px; width: 90%; height: 200px;" name="article">Marital Issues Article</textarea>
          <button class="btn btn-warning btn-sm" type="submit"> Submit</button>
        </form>
        <div>
      <?php 
        $users = $this->db->get('maritalissues')->result();
        if ($users) {
            foreach ($users as $key ): ?>
              <div class="row">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo ucfirst($key->title); ?></h3>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $key->article; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">created <?php echo ': '.  $key->created_by; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $key->date; ?></h6>
                        
                        <hr>
                          <a href="#" class="card-link text-white btn btn-color btn-sm" data-toggle="modal" data-target="#">Jazakumullahu</a>
                          <a href="#" class="card-link text-white btn btn-danger btn-sm" data-toggle="modal" data-target="#"><i class="fa fa-comment"></i>Questions</a>
                          <a href="admin_edit?id=<?php echo $key->id; ?>" class="btn btn-primary btn-sm">EDIT</a>
                          <a href="<?php echo site_url('admin/delete/'). $key->id ?>" class="btn btn-danger btn-sm delete-btn"> DELETE</a>
                      </div>
                  </div>
                </div>
              </div>   
            <?php 
            endforeach ;
          } else{

            ?>
            <tr><td colspan="9"><b style="color: red">NO RECORDS FOUND!!!</b></td></tr> 
            <?php } ?>
            
      </div>
    </section>
        <!-- End of main content -->
    </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>