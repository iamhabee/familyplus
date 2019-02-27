 <?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper"> 

  <?php $this->load->view('include/topbar');?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('include/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
  
   
  
  
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Profile Settings
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url();?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        
      </ol>
    </section> -->
         
    <!-- Main content -->
     <section class="content">

      <div class="row" >
          <?php if ( $this->session->flashdata('msg') ): ?>
            <div class="alert alert-<?php echo $this->session->flashdata('flag')?> col-md-12">
              <?php echo $this->session->flashdata('msg') ?>
            </div>
          <?php endif; ?>
        <div class="col-md-3" >

          <!-- Profile Image -->
           
          <div class="box box-primary" id="element_overlap">
            <div class="box-body box-profile">
            
            
              <img class="profile-user-img img-responsive img-circle profileImgUrl" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?> " alt="">

              <h3 class="profile-username text-center NameEdt"><?=$this->session->user_data->first_name;?></h3>

              <p class="text-muted text-center">Member since <?=$this->session->user_data->date_created;?>  </p>
 
               <a href="javascript:void(0);" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-block"><b>Upload Photo</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
     		 
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom" id="element_overlap1">
            <ul class="nav nav-tabs" style="margin-top: 7px;">
              <li class="active"><a href="#activity" data-toggle="tab">General Details</a></li>
               <li><a href="#settings" data-toggle="tab">Change Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               	<form class="form-horizontal " method="POST" action="<?php echo site_url() ?>user/update">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Profile</label>

                    <!-- <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?=$user['id']?>" readonly>
                    </div> -->
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-5">
                      <input type="text" class="form-control" name="first_name" value="<?=$this->session->user_data->first_name;?>" placeholder="First Name">
                    </div>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="last_name" value="<?=$this->session->user_data->last_name;?>" placeholder="Last Name">
                    </div>
                  </div>
                  
                    
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" value="<?=$this->session->user_data->email;?>" placeholder="Email">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Mobile No.</label>
                     <div class="col-sm-10">
                      <input type="number" class="form-control" name="phone_number" value="<?=$this->session->user_data->phone_number;?>" placeholder="Mobile No.">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="short_description" placeholder="Address"><?=$this->session->user_data->short_description;?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">occupation </label>
                     <div class="col-sm-10">
                      <input type="text" class="form-control" name="occupation" value="<?=$this->session->user_data->occupation;?>" placeholder="Pincode">
                    </div>
                  </div>
                  
                  
                  
                  <!-- <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">About</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="about" placeholder="About Yourself"><?=$user['about']?></textarea>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="" required class="col-sm-2 control-label">&nbsp;</label>
                 	  <p  id="ErrorMessageU"></p>
                 	</div>
                   
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            

              <div class="tab-pane" id="settings">
                <form class="form-horizontal ChangePassword" action="<?=base_url('profile-password-update');?>">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Old Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" required id="Old" placeholder="Old Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" required id="New" placeholder="New Password">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" required class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" required id="Confirm" placeholder="Confirm Password">
                    </div>
                  </div>
                  
                  <div class="form-group"><label for="" required class="col-sm-2 control-label">&nbsp;</label>
                 	<p  id="ErrorMessageP"></p>
                 	</div>
                  
                   
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                     
                      <button type="submit" class="btn btn-info ChangePassword">Update</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
 
  
  </div>
 
 
 
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
       
      <!-- <form method="POST" action="<?php //echo site_url() ?>user/photo" enctype="multipart/form-data"> -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="document_name">Change Profile Photo</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url() ?>user/photo" method="POST" enctype="multipart/form-data">
           <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="userfile" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                  <label class="custom-file-label" for="inputGroupFile04">Choose picture</label>
                </div>
                <div class="input-group-append">
                </div>
              </div>
            <img align="center" class="image" id="image" src="<?php echo site_url('uploads/'.$this->session->user_data->user_id.'.jpg')?>">
          <button type="submit" class="btn btn-info ">Upload</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </form>
      </div>
     </div>
    </div>
  </div>
   <!-- /.content-wrapper -->
  
<?php $this->load->view('include/footer');?>
<script src="<?=base_url('public');?>/loadingoverlap/loadingoverlay.min.js"></script>
<script src="<?=base_url('public');?>/loadingoverlap/loadingoverlay_progress.min.js"></script>

<script>
function LoginWith(url){
	window.open(url, "popup", "width=800,height=500,left=220,top=130");
}

$(".UploadForm").submit('on',function(e){
					e.preventDefault();
	
 					$('#myModal').modal('hide');
					$('#ErrorMessage').html('');
					
					$("#element_overlap").LoadingOverlay("show");
					
					var file_data = $('#userImage').prop('files')[0];   
					var form_data = new FormData();
					form_data.append('userPhoto', file_data);
 
  					$.ajax({
					  dataType : "json",
					  type : "post",
					  cache: false,
					  contentType: false,
					  processData: false,
					  data : form_data,
 					  headers: {  'Authkey': '<?=$this->security->get_csrf_hash();?>'},
					  url: '<?=base_url('upload-profile');?>',
					  success:function(data)
							{
								$("#element_overlap").LoadingOverlay("hide", true);
   								if(data.status == 0)
								{
								  $('#ErrorMessage').html('<span style="color:red;">'+data.message+'</span>');
								}
								if(data.status == 1)
								{
 									  $('#ErrorMessage').html(data.message);
									  $('.profileImgUrl').attr('src',data.picture_url);
 								}
 					  },
					  error: function (jqXHR, status, err) {
 						  $('#ErrorMessage').html('<span style="color:red;">Local error callback.</span>');
 					  }
 					});
					//} //else
 });
 
 
 $(".ChangePassword").submit('on',function(e){
	e.preventDefault();
	var New,Old,Confirm;
	New=$('#New').val();
	Old=$('#Old').val();
	Confirm=$('#Confirm').val();
     				$("#element_overlap1").LoadingOverlay("show");
    					$.ajax({
						  dataType : "json",
						  type : "post",
						  data : {New:New,Old:Old,Confirm:Confirm,},
						  headers: {  'Authkey': '<?=$this->security->get_csrf_hash();?>'},
						  url: '<?=base_url('profile-password-update');?>',
						  success:function(data)
								{
									$("#element_overlap1").LoadingOverlay("hide", true);
									if(data.status == 0)
									{
									  $('#ErrorMessageP').html('<span style="color:red;">'+data.message+'</span>');
									}
									if(data.status == 1)
									{
										  $('#ErrorMessageP').html(data.message);
 									}
						  },
						  error: function (jqXHR, status, err) {
							  $('#ErrorMessageP').html('<span style="color:red;">Local error callback.</span>');
						  }
 					});
					//} //else
 });
  
 $(".UpdateDetails").submit('on',function(e){
	e.preventDefault();
 
     				$("#element_overlap1").LoadingOverlay("show");
    					$.ajax({
						  dataType : "json",
						  type : "post",
						  data : $(".UpdateDetails").serialize(),
						  headers: {  'Authkey': '<?=$this->security->get_csrf_hash();?>'},
						  url: '<?=base_url('profile-details-update');?>',
						  success:function(data)
								{
									$("#element_overlap1").LoadingOverlay("hide", true);
									if(data.status == 0)
									{
									  $('#ErrorMessageU').html('<span style="color:red;">'+data.message+'</span>');
									}
									if(data.status == 1)
									{
										  $('#ErrorMessageU').html(data.message);
										  $('.NameEdt').html(data.updateName);
										  
									}
						  },
						  error: function (jqXHR, status, err) {
							  $('#ErrorMessageU').html('<span style="color:red;">Local error callback.</span>');
						  }
 					});
					//} //else
 });
 
 </script>
  
</body>
</html>
