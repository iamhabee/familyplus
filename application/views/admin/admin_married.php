
   

        <!-- begining of main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
        <div class="box-body">
          <div class="row">
        <!-- left column -->
        <div class="col-lg-12">
          <!-- <a href="#" data-toggle="modal" data-target="#marrieduserModal" class="btn btn-primary btn-sm">ADD NEW USER</a><br> -->
          <!--TABLE START -->
          <div class="table-responsive">
            <table class="table table-hover table-boardered table-striped">
              <tr>
                <th>S/NO</th>
                <th>Firstname</th>
                <th>Lastname</th>                
                <th>Othername</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Number</th>
                <th>User ID</th>
                <th>Description</th>
                <th>MaritalStatus</th>
                <th colspan="2">Action</th>
              </tr>

              <?php 
                $no = 0;
                $users = $this->db->get("familyplus")->result();
                if ($users != 0) {
                    foreach ($users as $key ):
                      if ($key->role_id == 03) {
                      $no++;
               ?>
              <tr>
                <td> <?php echo $no; ?></td>
                <td><?php echo ucfirst($key->first_name); ?></td>
                <td><?php echo ucfirst($key->last_name); ?></td>
                <td><?php echo ucfirst($key->other_name); ?></td>
                <td><?php echo ucfirst($key->email); ?></td>
                <td><?php echo ucfirst($key->gender); ?></td>
                <td><?php echo ucfirst($key->phone_number); ?></td>
                <td><?php echo ucfirst($key->user_id); ?></td>
                <td><?php echo ucfirst($key->short_description); ?></td>
                <td><?php echo ucfirst($key->marital_status); ?></td> 
                <!-- <td><?php echo ucfirst($key->last_name); ?></td> -->
                <td>
                  <a href="std_info_edit.php?id=<?php echo $key->id; ?>" class="btn btn-primary btn-sm">EDIT</a>
                </td>
                <td>
                  <a href="std_info_delete.php?id=<?php echo $key->id; ?>" class="btn btn-danger btn-sm delete-btn"> DELETE</a>
                </td>
              </tr>
            <?php }
            endforeach; 
          } else{

            ?>
            <tr><td colspan="9"><b style="color: red">NO RECORDS FOUND!!!</b></td></tr> 
            <?php } ?>
            </table>
          </div>
    </section>
        <!-- End of main content -->
    </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
