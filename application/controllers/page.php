<?php 
	
	/**
	 * 
	 */
	class Page extends CI_Controller
	{
		
		public function index()
		{
			# code...
			$data['title'] = "Familyplus";
			$data['page_name'] = "Home";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('index');
			$this->load->view('template/footer');
		}

		public function login()
		{
			# code...
			$data['title'] = "Familyplus | Login";
			$data['page_name'] = "Login";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('login');
			$this->load->view('template/footer');
		}

		public function signup()
		{
			# code...
			$data['title'] = "Familyplus | Register";
			$data['page_name'] = "Register";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('register');
			$this->load->view('template/footer');
		}

		public function about()
		{
			# code...
			$data['title'] = "Familyplus | About";
			$data['page_name'] = "About";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav2', $data);
			$this->load->view('about');
			$this->load->view('template/footer');
		}

		public function connect()
		{
			# code...
			$data['title'] = "Familyplus | Connect";
			$data['page_name'] = "Connect";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav2', $data);
			$this->load->view('connect');
			$this->load->view('template/footer');
		}
    }

?>