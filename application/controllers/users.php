<?php 
	
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		
		

		public function register_user()
		{
			# code...
			// var_dump($_POST);

			$this->load->model('user');

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

				$data['title'] = "Events| Register";

				$this->load->view('template/header', $data);
				$this->load->view('template/nav');
				$this->load->view('register');
				$this->load->view('template/footer');

			else:
					$msg = "Hi ".$this->input->post('full_name').", You are welcome to Ikeja Yellow Page.";
					$msg .= "Please Verify Your  account By Clicking The Link Below";
					$msg .= " <button><a href=''>Activate</a></button>";

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
					// if ($this->send_mail($this->input->post("email"), "Account Registration", $message, 'html'));

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

					// if ( $this->user->register_user($newuser) ):
					// 	$this->session->set_flashdata('msg', 'Registration Successful. You can now login');
					// 	$this->session->set_flashdata('flag', 'success');
					// 	redirect("login");
					// endif;

				
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

					if (md5($password) === $details->password) {
						$userList = $this->user->get_user();
						# code...
						//echo "Correct Password";
						$this->session->set_flashdata('msg', 'Login Successful');
						$this->session->set_flashdata('flag', 'success');
						
						
						$this->session->set_userdata('user_list', $userList);
						$this->session->set_userdata('user_data', $details);
						// echo $rfrom;
						if (isset($rfrom) && strlen($rfrom) !== 0) {
							# code...
							// redirect($rfrom);
						}
					// 	$roles = $this->db->get('roles')->result()?
					// if ($this->roles->role_id == 04) {
					// 	redirect("married_dashboard");
					// }elseif ($this->roles->role_id == 02) {
					// 	redirect("councilor_dashboard");
					// }else{
							# code...
							redirect("dashboard");
						// }					
					} else {
						# code...
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

		public function logout(){
			session_destroy();
			// $this->session->unset_userdata('user_data');
			redirect(base_url());
		}

		public function upload_picture(){
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/'.$this->session->user_data->user_id.'.jpg');
			redirect('dashboard');
		}

	}

?>