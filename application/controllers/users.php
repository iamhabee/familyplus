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
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
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
				$user_detail = array(
					// "user_id" => $this->input->post('user_id'),
					"first_name" => $this->input->post('first_name'),
					"last_name" => $this->input->post('last_name'),
					"other_name" => $this->input->post('other_name'),
					"email"		=> $this->input->post('email'),
					"phone_number"	=> $this->input->post('phone_number'),
					"gender"	=> $this->input->post('gender'),
					"marital_status"	=> $this->input->post('marital_status'),
					"age_range"	=> $this->input->post('age_range'),
					"religion"	=> $this->input->post('religion'),
					"occupation"	=> $this->input->post('occupation'),
					"password"	=> $this->input->post('password'),
				);

				if ( $this->user->register_user($user_detail) ):
					$this->session->set_flashdata('msg', 'Registration Successful. You can now login');
					$this->session->set_flashdata('flag', 'success');
					redirect("login");
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

					if ($password == $details->password) {
						# code...
						//echo "Correct Password";
						$this->session->set_flashdata('msg', 'Login Successful');
						$this->session->set_flashdata('flag', 'success');
						
						
						$this->session->set_userdata('user_data', $details);
						$this->session->set_flashdata('msg', 'Login Successful');
						$this->session->set_flashdata('flag', 'success');
						// echo $rfrom;
						if (isset($rfrom) && strlen($rfrom) !== 0) {
							# code...
							// redirect($rfrom);
						}
							# code...
							redirect("dashboard");
											
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
				$data['title'] = "Events| Login/Register";

				$this->load->view('template/header', $data);
				$this->load->view('template/nav');
				$this->load->view('login');
				$this->load->view('template/footer');
			endif;
		}

		public function logout(){
			$this->session->unset_userdata('user_data');
			redirect(base_url());
		}


	}

?>