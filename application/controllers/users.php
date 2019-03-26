<?php 
	
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		
		

		public function single()
		{
			$this->load->model('user');

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|alpha');
			$this->form_validation->set_rules('other_name', 'Other Name', 'required|trim|alpha');
			$this->form_validation->set_rules('short_description', 'Short Desription', 'required');
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[familyplus.email]');
			$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|is_numeric|min_length[11]|max_length[13]');

			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('marital_status', 'Marital Status', 'required');
			$this->form_validation->set_rules('age_range', 'Age range', 'required');
			$this->form_validation->set_rules('religion', 'Religion', 'required');
			$this->form_validation->set_rules('occupation', 'Occupation', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[10]|min_length[8]');
			$this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|trim|matches[password]');

			if ( $this->form_validation->run() === FALSE):

				$data['title'] = "FamilyPlus| Register";

				$this->load->view('template/header', $data);
				$this->load->view('template/nav');
				$this->load->view('register');
				$this->load->view('template/footer');

			else:

					$_POST['token']=random_string('alnum', 32);
					$url = "localhost/familyplus/users/activation/".$_POST['token'];
					$msg = "Hi ".$this->input->post('full_name').", You are welcome to FamilyPlus.";
					$msg .= "Please Verify Your  account By Clicking The Link Below";
					$msg .= "<button><a href='<?php echo (".$url.")?>'>Activate</a></button>";

				$message = "
					     <html>
					       <head>
					         <title>Welcome message</title>
					       </head>
					       <body>
					         <p>$msg</p>
					       </body>
					     </html>";


					$_POST['user_id']=random_string('alnum', 10);
					move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/'.$_POST['user_id'].'.jpg');
					$_POST['password'] = md5($_POST['password']);
					unset($_POST['confirm_password']);
					$newuser = $this->input->post();
					

					
					if($this->send_mail($this->input->post('email'), "Account Registration", $message)):
					    $this->user->register_user($newuser);
					     $this->session->set_flashdata('msg', "Registration Successfull! An activation Email have been sent to your mail. Please check your mail to activate your account");
					     $this->session->set_flashdata('flag', 'success');
					     
					     redirect('login');
					   
					else:
					     $this->session->set_flashdata('msg', "Please Verify Your Email Is Correct And You Are Connected To The Internet");
					     $this->session->set_flashdata('flag', 'danger');
					     redirect('signup');
					endif;

				
			endif;
		}

		public function married()
		{
			$this->load->model('user');

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha');
			$this->form_validation->set_rules('spouse_first_name', 'Spouse First Name', 'required|trim|alpha');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|alpha');
			$this->form_validation->set_rules('other_name', 'Other Name', 'required|trim|alpha');
			$this->form_validation->set_rules('spouse_other_name', 'Spouse Other Name', 'required|trim|alpha');
			$this->form_validation->set_rules('short_description', 'Short Desription', 'required');
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[familyplus.email]');
			$this->form_validation->set_rules('spouse_email', 'Spouse E-mail', 'required|valid_email|is_unique[familyplus.email]');
			$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|is_numeric|min_length[11]|max_length[13]');
			$this->form_validation->set_rules('spouse_phone_number', 'Spouse Phone Number', 'required|trim|is_numeric|min_length[11]|max_length[13]');

			// $this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('marital_status', 'Marital Status', 'required');
			$this->form_validation->set_rules('spouse_marital_status', 'Spouse Marital Status', 'required');
			$this->form_validation->set_rules('age_range', 'Age range', 'required');
			$this->form_validation->set_rules('spouse_age_range', 'Spouse Age range', 'required');
			$this->form_validation->set_rules('religion', 'Religion', 'required');
			$this->form_validation->set_rules('spouse_religion', 'Spouse Religion', 'required');
			$this->form_validation->set_rules('occupation', 'Occupation', 'required');
			$this->form_validation->set_rules('spouse_occupation', 'Spouse Occupation', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[10]|min_length[8]');
			$this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|trim|matches[password]');

			if ( $this->form_validation->run() === FALSE):

				$data['title'] = "FamilyPlus| Register";

				$this->load->view('template/header', $data);
				$this->load->view('template/nav');
				$this->load->view('register');
				$this->load->view('template/footer');

			else:
					$_POST['token']=random_string('alnum', 32);
					$url = "localhost/familyplus/users/activation/".$_POST['token'];
					$msg = "Hi ".$this->input->post('full_name').", You are welcome to FamilyPlus.";
					$msg .= "Please Verify Your  account By Clicking The Link Below";
					$msg .= "<button><a href='<?php echo (".$url.")?>'>Activate</a></button>";
				$message = "
					     <html>
					       <head>
					         <title>Welcome message</title>
					       </head>
					       <body>
					         <p>$msg</p>
					       </body>
					     </html>";


					$_POST['user_id']=random_string('alnum', 10);
					move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/'.$_POST['user_id'].'.jpg');
					$_POST['password'] = md5($_POST['password']);
					unset($_POST['confirm_password']);
					$newuser = $this->input->post();
					

					

					if($this->send_mail($this->input->post('email'), "Account Registration", $message)):
					    $this->user->register_user($newuser);
					     $this->session->set_flashdata('msg', "Registration Successfull! An activation Email have been sent to your mail. Please check your mail to activate your account");
					     $this->session->set_flashdata('flag', 'success');
					     redirect('login');
					   
					else:
					     $this->session->set_flashdata('msg', "Please Verify Your Email Is Correct And You Are Connected To The Internet");
					     $this->session->set_flashdata('flag', 'danger');
					     redirect('signup');
					     // echo json_encode($status);
					endif;
				
			endif;
		}

public function counsellor()
		{
			$this->load->model('user');

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|alpha');
			$this->form_validation->set_rules('other_name', 'Other Name', 'required|trim|alpha');
			$this->form_validation->set_rules('short_description', 'Short Desription', 'required');
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[familyplus.email]');
			$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|is_numeric|min_length[11]|max_length[13]');

			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('religion', 'Religion', 'required');
			$this->form_validation->set_rules('occupation', 'Occupation', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[10]|min_length[8]');
			$this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|trim|matches[password]');

			if ( $this->form_validation->run() === FALSE):

				$data['title'] = "FamilyPlus| Register";

				$this->load->view('template/header', $data);
				$this->load->view('template/nav');
				$this->load->view('register');
				$this->load->view('template/footer');

			else:
					$_POST['token']=random_string('alnum', 32);
					$url = "localhost/familyplus/users/activation/".$_POST['token'];
					$msg = "Hi ".$this->input->post('full_name').", You are welcome to FamilyPlus.";
					$msg .= "Please Verify Your  account By Clicking The Link Below";
					$msg .= "<button><a href='<?php echo (".$url.")?>'>Activate</a></button>";

				$message = "
					     <html>
					       <head>
					         <title>Welcome message</title>
					       </head>
					       <body>
					         <p>$msg</p>
					       </body>
					     </html>";


					$_POST['user_id']=random_string('alnum', 10);
					move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/'.$_POST['user_id'].'.jpg');
					$_POST['password'] = md5($_POST['password']);
					unset($_POST['confirm_password']);
					$newuser = $this->input->post();
					

					

					if($this->send_mail($this->input->post('email'), "Account Registration", $message)):
					    $this->user->register_user($newuser);
					     $this->session->set_flashdata('msg', "Registration Successfull! An activation Email have been sent to your mail. Please check your mail to activate your account");
					     $this->session->set_flashdata('flag', 'success');
					     redirect('admin');
					   
					else:
					     $this->session->set_flashdata('msg', "Please Verify Your Email Is Correct And You Are Connected To The Internet");
					     $this->session->set_flashdata('flag', 'danger');
					     redirect('admin');
					endif;

				
			endif;
		}

		public function login_user()
		{
			# code...
			$this->load->model('user');

			$this->form_validation->set_rules('email', 'E-maill', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|trim');

			if ( $this->form_validation->run() ):

				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$rfrom = $this->input->post('rfrom');

				$details = $this->user->get_user_by_email($email);
				if ($details){
					if ($details->acct_status === 'pending') {
						$this->session->set_flashdata('msg', 'Please activate account');
						$this->session->set_flashdata('flag', 'info');
						redirect("login");
						}
					if (md5($password) === $details->password) {

						$this->session->set_flashdata('msg', 'Login Successful');
						$this->session->set_flashdata('flag', 'success');
						
						
						$this->session->set_userdata('user_data', $details);

							redirect("dashboard");
						
										
					} else {

						$this->session->set_flashdata('msg', 'Incorrect Password');
						$this->session->set_flashdata('flag', 'danger');
						redirect("login");
					}
				}else{
					$this->session->set_flashdata('msg', "User with {$email} does not exist");
					$this->session->set_flashdata('flag', 'danger');
					redirect("login");
				}
				

			else:
				$data['title'] = "FamilyPlus | Login";

				$this->load->view('template/header', $data);
				$this->load->view('template/nav');
				$this->load->view('login');
				$this->load->view('template/footer');
			endif;
		}



		//		Send Email Function
		public function send_mail($mail_to, $subject, $msg, $mailtype="html") {
    //Load email library
    $this->load->library('email');

    $config = array();
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    $config['smtp_user'] = 'toykampage1000@gmail.com';
    $config['smtp_pass'] = 'dolapo2018';
    $config['smtp_port'] = 465  ;
    $config['mailtype'] = $mailtype;
    $this->email->initialize($config);

    $this->email->set_newline("\r\n");
    $this->email->from($this->config->item('smtp_user'), 'Family Plus');
    $this->email->to($mail_to);
    $this->email->subject($subject);
    $this->email->message($msg);
    //Send mail
    if($this->email->send()) {
        return true;
    }else{
        print($this->email->print_debugger());
        $path = $this->config->item('server_root');
        $file_path = $path."/familyplus/logs/error_log.txt";
        $file = fopen($file_path, "+a");
        fwrite($file_path, $this->email->print_debugger().'\n');
        fclose($file_path);
        return false;
    }
}

		public function activation($token){
			$check = $this->db->get_where('familyplus',  array('token' => $token))->row();
				if ($check) {
					if($check->acct_status === 'pending'){
						$this->db->set('acct_status', 'active')->where('token', $token)->update('familyplus');

						$this->session->set_flashdata('msg', 'Account Activated Successfully');
						$this->session->set_flashdata('flag', 'success');
						redirect('login');
					}elseif($check->acct_status === 'active'){

						$this->session->set_flashdata('msg', 'Account Activated already');
						$this->session->set_flashdata('flag', 'info');
						redirect('login');

					}else{
						$this->session->set_flashdata('msg', 'Account Activation failed');
						$this->session->set_flashdata('flag', 'danger');
						redirect('login');
					}
				}

		}

		public function update_profile(){
			$uid = $this->session->user_data->id;
			$email = $this->session->user_data->email;
			$update = $this->input->post();
			$profile_updated = $this->db->update('familyplus', $update ,['id' => $uid ] );

				if ($profile_updated) {
				$details = $this->user->get_user_by_email($email);
					$this->session->set_userdata('user_data', $details);
					$this->session->set_flashdata('msg', 'Profile updated Successfully');
						$this->session->set_flashdata('flag', 'success');
						redirect('profile');
				}else{
					$this->session->set_flashdata('msg', 'Profile update failed');
						$this->session->set_flashdata('flag', 'danger');
						redirect('login');
				}
		}

		public function issues(){
			$this->form_validation->set_rules('article', 'Article', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');
			if ( $this->form_validation->run() === FALSE):

			$this->session->set_flashdata('msg', "Not Successful");
			$this->session->set_flashdata('flag', 'danger');
				redirect('admin');

			else:
			$issues = $this->input->post();
			$sql = $this->db->insert_string('maritalissues', $issues);
			$this->db->query($sql);
			$this->session->set_flashdata('msg', "Article posted Successfully");
			$this->session->set_flashdata('flag', 'success');
			 redirect('admin');
			endif;
		}

		public function comunity(){
			$this->form_validation->set_rules('post', 'Post', 'required');
			if ( $this->form_validation->run() === FALSE):

			$this->session->set_flashdata('msg', "Not Successful");
			$this->session->set_flashdata('flag', 'danger');
				redirect('dashboard');

			else:
			$comunity = $this->input->post();
			$sql = $this->db->insert_string('comunity', $comunity);
			$this->db->query($sql);
			$this->session->set_flashdata('msg', "Posted Successfully");
			$this->session->set_flashdata('flag', 'success');
			 redirect('dashboard');
			endif;
		}

		public function maritalissues_by_counsellors(){
			$this->form_validation->set_rules('article', 'Article', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			if ( $this->form_validation->run() === FALSE):

			$this->session->set_flashdata('msg', "Not Successful");
			$this->session->set_flashdata('flag', 'danger');
				redirect('maritalIssues');

			else:
			$issues = $this->input->post();
			$sql = $this->db->insert_string('maritalissues', $issues);
			$this->db->query($sql);
			$this->session->set_flashdata('msg', "Article posted Successfully");
			$this->session->set_flashdata('flag', 'success');
			 redirect('maritalIssues');
			endif;
		}
		public function scheduler(){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('counsellor', 'Counsellor', 'required');
			$this->form_validation->set_rules('date', 'Date', 'required');
			$this->form_validation->set_rules('time', 'Time', 'required');
			if ( $this->form_validation->run() === FALSE):
			$this->session->set_flashdata('msg', "Schedule not Successful!!! Please fill all the form to schedule a meeting with a counsellor");
			echo validation_errors();
			$this->session->set_flashdata('flag', 'danger');
				redirect('dashboard');
				// var_dump($this->input->post());

			else:
					$msg = "Hi ".$this->input->post('name').", has successfully schedule a meeting with " .$this->input->post('counsellor');
					$msg .= "This is to inform the both parties that a meeting have schedule to take place at " .$this->input->post('time');

				$message = "
					     <html>
					       <head>
					         <title>Welcome message</title>
					       </head>
					       <body>
					         <p>$msg</p>
					       </body>
					     </html>";

					if($this->send_mail($this->session->user_data->email, "Schedule Successfull", $message) && $this->send_mail($this->input->post('counsellor_email'), "Schedule Successfull", $message)):
					    $schedule = $this->input->post();
						$sql = $this->db->insert_string('scheduler', $schedule);
						$this->db->query($sql);
						$this->session->set_flashdata('msg', "A meeting was Successfully scheduled");
						$this->session->set_flashdata('flag', 'success');
						 redirect('dashboard');
					   
					else:
					     $this->session->set_flashdata('msg', "Please Verify You Are Connected To The Internet");
					     $this->session->set_flashdata('flag', 'danger');
					     redirect('dashboard');
					     // echo json_encode($status);
					endif;

			
			endif;
		}

		public function logout(){
			session_destroy();
			// $this->session->unset_userdata('user_data');
			redirect(base_url());
		}

		public function delete(){
			 $user_id = $this->session->user_data->id;
			 $this->user->delete_schedule($user_id);
			 redirect('chat');
		}
		public function deleteByCounsellor($id){
			 $this->user->delete_schedule($id);
			 redirect('chat');
		}

		public function update_schedule_status($id){
					$check = $this->db->get_where('scheduler',  array('user_id' => $id))->row();
				if ($check) {
					if($check->status === 'pending'){
						$this->db->set('status', 'active')->where('user_id', $id)->update('scheduler');

						$this->session->set_flashdata('msg', 'Chat Activated Successfully');
						$this->session->set_flashdata('flag', 'success');
						redirect('chat');
					}elseif($check->status === 'active'){

						$this->session->set_flashdata('msg', 'Chat has already been activated ');
						$this->session->set_flashdata('flag', 'info');
						redirect('chat');

					}else{
						$this->session->set_flashdata('msg', 'Chat activation failed');
						$this->session->set_flashdata('flag', 'danger');
						redirect('chat');
					}
				}
		}

		public function upload_picture(){
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/'.$this->session->user_data->user_id.'.jpg');
			$this->session->set_flashdata('msg', "Picture uploaded Successfully");
			$this->session->set_flashdata('flag', 'success');
			redirect('profile');
		}

	}

?>