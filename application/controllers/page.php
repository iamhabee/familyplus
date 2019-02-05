<?php 
	
	/**
	 * 
	 */
	class Page extends CI_Controller
	{
		
		public function index()
		{
			$this->load->view('index');
		}

		public function login()
		{
			if ( isset($this->session->user_data) ) {
    		redirect('dashboard');
		}
			# code...
			$data['title'] = "Familyplus | Login";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('login');
			$this->load->view('template/footer');
		}

		public function signup()
		{
			# code...
			$data['title'] = "Familyplus | Register";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav');
			$this->load->view('register');
			$this->load->view('template/footer');
		}

		public function about()
		{
			
			$data['title'] = "Familyplus | About";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav');
			$this->load->view('about');
			$this->load->view('template/footer');
		}

		public function connect()
		{
			$data['title'] = "Familyplus | Connect";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav');
			$this->load->view('connect');
			$this->load->view('template/footer');
		}

		public function consultation()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');
		}
			# code...
			$data['title'] = "Familyplus | Consultation";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav');
			$this->load->view('template/sidebar1');
			$this->load->view('consultation');
			$this->load->view('template/footer');
		}

		public function maritalIssues()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');
		}
			# code...
			$data['title'] = "Familyplus | marital-issues";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav');
			$this->load->view('template/sidebar1');
			$this->load->view('marital-status');
			$this->load->view('template/footer');
		}

		public function live_search(){
			$res = array('status' => 1, "msg"=>$this->db->like('first_name', $_GET['q'])->get('familyplus')->result());
			echo json_encode($res);
		}
    }

?>