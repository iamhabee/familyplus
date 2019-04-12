<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {
 
 
 
 public function index(){
 		if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');

		}
	$data['title'] = "Familyplus | Profile";
	$this->load->view('include/header',$data);
 	$this->parser->parse('profile/profile_index',[]);
 
 }

	public function change_photo(){
		
		// $this->OuthModel->CSRFVerify();
			
			//print_r($_FILES);
			$resonse=['status' => 0, 'message'=> 'false'];
			if(isset($_FILES['userPhoto']['name']) && !empty($_FILES['userPhoto']['name'])){	
				
								$config['upload_path']          = './uploads/profiles';
								$config['allowed_types']        = 'gif|jpg|png';
								$config['max_size']             = 500;
								 //$config['max_width']            = 1024;
								//$config['max_height']           = 768;
								 $this->load->library('upload', $config);
								 if ( ! $this->upload->do_upload('userPhoto'))
								 {
										 echo json_encode(['status' => 0, 'message' => $this->upload->display_errors() ]); die;
								 }
								 else
								 {
										$file_data = $this->upload->data();
										$query =  $this->UserModel->UpdateProfileImageByID(['picture_url'=>$file_data['file_name']]);
										if($query == true){
											$picture_url = base_url('/uploads/profiles/'.$file_data['file_name']);
											$resonse=['status' => 1, 'message'=> 'Profile Image Upload Successfully !','picture_url' => $picture_url];
										}else{
											$resonse=['status' => 0, 'message'=> 'false'];
										}
										
								 }
			}
			echo json_encode($resonse);
		}

	public function change_user_profile_password_update(){
 		 $this->OuthModel->CSRFVerify();
		$post = $this->input->post();
 		
 		$this->form_validation->set_rules('old', 'Old Password', 'required|trim');
		$this->form_validation->set_rules('new', 'New Password', 'required|trim');
		$this->form_validation->set_rules('confirm', 'Confirm New Password', 'required|trim');
 		if($this->form_validation->run()):
			
 			 
			if(md5($post['old']) === $this->session->user_data->password):
 				 
  				$user_id = $this->session->user_data->id;
				$update = $this->OveModel->UpdatePassword($user_id, md5($post['new']));
				if($update == true):
					$this->session->set_flashdata('msg', 'Password Updated Successfully');
					$this->session->set_flashdata('flag', 'success');
						redirect("profile");
				else:
					$this->session->set_flashdata('msg', 'Password failed to update, Please confirm that you are connected to internet and try again');
					$this->session->set_flashdata('flag', 'danger');
						redirect("profile");
				endif;
			
			else:
 				$this->session->set_flashdata('msg', 'Your old password do not match in databases, please enter correct password');
				$this->session->set_flashdata('flag', 'danger');
					redirect("profile");
			endif;
  		else:
			redirect("profile");
		endif;

  	}
	
	public function user_update_profile_data(){
		$this->OuthModel->CSRFVerify();
 		$request = $this->input->post();
 		
		if(!empty($request['first_name'])){$post['first_name'] = $request['first_name'];}
		if(!empty($request['last_name'])){$post['last_name'] = $request['last_name'];}
		
 		if(!empty($request['email'])){$post['email'] = $request['email'];}
		if(!empty($request['mobile_no'])){$post['mobile_no'] = $request['mobile_no'];}
		
		
		if(!empty($request['address'])){$post['address'] = $request['address'];}
		if(!empty($request['about'])){$post['about'] =  $request['about'];}
 		if(!empty($request['pincode'])){$post['pincode'] = $request['pincode'];}
 				
  			$post['name'] = $request['first_name'].' '.$request['last_name'];
  			$post['ip_address'] = $this->input->ip_address();
			$post['modified'] = date('Y-m-d H:i:s');
			
		 
 								
 			$query =  $this->OveModel->UpdateData($this->OuthModel->xss_clean($post));
			if($query == true){ 
				$message = [
							'status' => 1,
							'message' => 'Profile updated !',
							'updateName' => $post['name']
 						];
			}else{
				$message = [
							'status' => 0,
							'message' => 'Faild to updated !'
						];
			}
 			echo json_encode($message);
				
 	}
	public function forgot_password(){
 		$this->parser->parse('login/forgot_password_template',[]);
	}
	public function forgot_password_email(){
		$this->OuthModel->CSRFVerify(); 
		
		$email=$this->input->get('email');
		$ifexists = $this->UserModel->IfExistEmail($email);
		
		if($ifexists != false){
			
			$new_password = $this->OuthModel->RandomPassword();
 
 				$user_id = $ifexists['id'];
				$update = $this->OveModel->UpdatePassword($user_id,$this->OuthModel->HashPassword($new_password));
				if($update == true){
					$message = ['status' => 1 ,'message' => "Your new password has been sent to your email address. !"];
				}else{
					$message = ['status' => 0 ,'message' => "Faild to password updated, Please try again !"];
				}
 			
 		}else{
				$message = [
							'status' => 0,
							'message' => 'Sorry Your Email Not exists in the database !'
						];
		}
 		
		echo json_encode($message);
	}
		
	 
	
	 
}
