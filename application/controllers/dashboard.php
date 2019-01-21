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
			$this->load->view('template/nav1', $data);
			$this->load->view('home');
			$this->load->view('template/footer');
		}

    }

?>