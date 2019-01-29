<?php 
	
	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		
		public function index()
		{
			# code...
			$data['title'] = "Familyplus | Dashboard";
			$data['page_name'] = "dashboard";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('home');
			$this->load->view('template/footer');
		}

		public function profile()
		{
			# code...
			$data['title'] = "Familyplus | Dashboard";
			$data['page_name'] = "dashboard";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('profile');
			$this->load->view('template/footer');
		}

		public function faf()
		{
			# code...
			$data['title'] = "Familyplus | faf";
			$data['page_name'] = "faf";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('faf');
			$this->load->view('template/footer');
		}

    }

?>