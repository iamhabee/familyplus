
<style>
	.fileDiv {
  position: relative;
  overflow: hidden;
}
.upload_attachmentfile {
  position: absolute;
  opacity: 0;
  right: 0;
  top: 0;
}
.btnFileOpen {margin-top: -50px; }

.direct-chat-warning .right>.direct-chat-text {
    background: #d2d6de;
    border-color: #d2d6de;
    color: #444;
	text-align: right;
}
.direct-chat-primary .right>.direct-chat-text {
    background: #3c8dbc;
    border-color: #3c8dbc;
    color: #fff;
	text-align: right;
}
.spiner{}
.spiner .fa-spin { font-size:24px;}
.attachmentImgCls{ width:450px; margin-left: -25px; cursor:pointer; }
</style>
 

<div class="content-wrapper"> 
  
  <!-- Content Header (Page header) -->
  
   
  
  <!-- Main content -->
  
  <section class="content">
    <?php if ( $this->session->flashdata('msg') ): ?>
    <div class="alert alert-<?php echo $this->session->flashdata('flag')?>">
      <?php echo $this->session->flashdata('msg') ?>
    </div>
    <?php endif; ?>

     <div class="row">
           <?php 
                $title = '';
                $chat = '';
             if ($this->session->user_data->role_id == 02) {
                $title = 'All Users';
                $chat = 'Chat with Users';
            }else{
              $title = 'All Counsellors';
              $chat = 'Chat with Counsellor';
            } 
            $userList = $this->user->get_users();
            $users = $this->db->get('scheduler')->result();
            // var_dump($userList);
                $user_id = $this->session->user_data->id;
                $scheduler = $this->user->get_schedule($user_id);
            if ($this->session->user_data->role_id !== '02' && empty($scheduler)) : ?>

            <div class="container text-center">
              <h4> Hi <?php echo $this->session->user_data->first_name; ?> </h4><br>
              <p> You currently do not have a schedule on queue, Please click on the scheduler on the left side menu to schedule an appointment with one of our topmost expert. Thank You</p>
            </div>

            <?php elseif ($this->session->user_data->role_id !== '02' && $scheduler->status == 'pending') :  ?>

              <div class="container text-center">
                <h4> Hi <?php echo $this->session->user_data->first_name; ?> </h4><br>
                <p> Your meeting is still on pending, please check back later.  Thank You</p>
              </div>

           <?php else : ?>

            <div class="col-md-8" id="chatSection">
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title" id="ReciverName_txt"><?=$chat ?></h3>

                  <div class="box-tools pull-right">

                    <?php if ($this->session->user_data->role_id === '02') : ?>
                    <a class="btn btn-box-tool delete" id="close" href="" data-toggle="tooltip" title="Close Chat"> <i class="fa fa-close"></i></a>
                    <a class="btn btn-box-tool activate" id="activate" href="" data-toggle="tooltip" title="activate"> <i class="fa fa-check"></i></a>
                    <?php else :  ?>
                    <a class="btn btn-box-tool" id="close" href="delete" data-toggle="tooltip" title="Close Chat"> <i class="fa fa-close"></i></a>
                    <?php endif ?>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button> -->
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages" id="content">
                     <!-- /.direct-chat-msg -->

                     <div id="dumppy"></div>

                  </div>
                  <!--/.direct-chat-messages-->
 
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <!--<form action="#" method="post">-->
                    <div class="input-group">
                     <!-- <?php
						//$obj=&get_instance();
						//$obj->load->model('UserModel');
						// $profile_url = $obj->UserModel->PictureUrl();
					//	$user=$obj->UserModel->GetUserData();
 					?> -->
                    	
                        <input type="hidden" id="Sender_Name" value="<?=$this->session->user_data->first_name;?>">
                        <!-- <input type="hidden" id="Sender_ProfilePic" value="<?=$profile_url;?>"> -->
                    	
                    	<input type="hidden" id="ReciverId_txt">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control message">
                      		<span class="input-group-btn">
                             <button type="button" class="btn btn-success btn-flat btnSend" id="nav_down">Send</button>
                             <div class="fileDiv btn btn-info btn-flat"> <i class="fa fa-upload"></i> 
                             <input type="file" name="file" class="upload_attachmentfile"/></div>
                          </span>
                    </div>
                  <!--</form>-->
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>




            <div class="col-md-4">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title"><?=$title ?></h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger"></span>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button> -->
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  
                    <?php if(!empty($userList)){
                      if($this->session->user_data->role_id !== '02') { 
						            foreach($userList as $v):
                          if ($v->role_id !== '02') {
                            continue;
                            
                          }
                            
                          ?>
                          <!-- counsellors list -->
                        <li class=" selectVendor" id="<?php echo $this->OuthModel->Encryptor('encrypt', $v->id);?>" title="<?php echo $v->first_name;?>">
                          <a class="users-list-name" href="#"><?php echo  $v->title. ' '. $v->first_name ?></a>
                          <!-- <span class="users-list-date">Yesterday</span> -->
                        </li>
                    <?php
                        endforeach;
                      }else{
                          foreach ($users as $key):  ?>
                            <!-- users list-->
                        <li class=" selectVendor" height="<?php echo $key->user_id;?>" id="<?php echo $this->OuthModel->Encryptor('encrypt', $key->user_id);?>" title="<?php echo $key->name;?>">
                          <a class="users-list-name" href="#"><?php echo $key->name ?></a>
                          <!-- <span class="users-list-date">Yesterday</span> -->
                        </li>
                    <?php endforeach; 
                          }
                         }else{?>
                   	<li>
                       <a class="users-list-name" href="#">No users on schedule...</a>
                     </li>
                  	<?php } ?>
                    
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
            <?php endif; ?>         
          </div>
    
    <!-- /.row --> 
    
    
    
  </section>
  
  <!-- /.content --> 
  
</div>

<!-- /.content-wrapper --> 

<!-- Modal -->
<div class="modal fade" id="myModalImg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="modelTitle">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <img id="modalImgs" src="uploads/attachment/21_preview.png" class="img-thumbnail" alt="Cinque Terre">
        </div>
        
        <!-- Modal footer -->
         
        
      </div>
    </div>
  </div>

  