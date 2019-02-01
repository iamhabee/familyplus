<?php 
	
	/**
	 * 
	 */
	class admin extends CI_Controller
	{
		
		public function index(){
			if ($this->session->userdata('admin_data')) {
				$data['title'] = "Admin";
				$this->load->view('template/admin_header', $data);
				$this->load->view('template/sidebar');
				$this->load->view('admin/admin_dashboard');
				$this->load->view('template/admin_footer');
			}else{
				redirect('adminlogin');
			}
		}
		public function login(){
			if ($this->session->userdata('admin_data')) {
				$this->load->view('admin/admin_dashboard');
			}else {
				$this->load->view('admin/admin_login');
			}
		}

		public function account_login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			// var_dump($this->input->post());
			$checker = $this->db->get_where('admin',  array('email' => $email ))->row();
			if ($checker) {
				if ($checker->password === $password) {
					$this->session->set_userdata("admin_data", $checker);
					$this->session->set_flashdata('msg', 'Login Successful');
					$this->session->set_flashdata('flag', 'success');
					redirect('admin');
				} else{
					$this->session->set_flashdata('msg', 'Incorrect password');
					$this->session->set_flashdata('flag', 'danger');
					redirect('adminlogin');

				}
			}else{
				$this->session->set_flashdata('msg', 'Admin does not exist');
				$this->session->set_flashdata('flag', 'danger');
				redirect('adminlogin');
			}
		}

		public function single(){
			if ($this->session->userdata('admin_data')) {
				$data['title'] = "Admin | Single";
				$this->load->view('template/admin_header', $data);
				$this->load->view('template/sidebar');
				$this->load->view('admin/admin_single');
				$this->load->view('template/admin_footer');
			}else {
				$this->load->view('admin/admin_login');
			}
		}

		public function married(){
			if ($this->session->userdata('admin_data')) {
				$data['title'] = "Admin | Married";
				$this->load->view('template/admin_header', $data);
				$this->load->view('template/sidebar');
				$this->load->view('admin/admin_married');
				$this->load->view('template/admin_footer');
			}else {
				$this->load->view('admin/admin_login');
			}
		}

		public function counsellor(){
			if ($this->session->userdata('admin_data')) {
				$data['title'] = "Admin | Counsellor";
				$this->load->view('template/admin_header', $data);
				$this->load->view('template/sidebar');
				$this->load->view('admin/admin_counsellor');
				$this->load->view('template/admin_footer');
			}else {
				$this->load->view('admin/admin_login');
			}
		}

		public function search(){
			$this->load->model('user');
		$firstname = $this->input->post('search');
		if (isset($firstname) && !empty($firstname)) {
			$data['search'] = $this->user->search($firstname);
			$this->load->view('admin/admin_single', $data);
		}else{
			redirect('admin');
			}
		}
	}

?>