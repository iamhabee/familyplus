<?php 
	
	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		
		public function index()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');

		}
			# code...
			if(isset($_GET['q'])){
				$data['page_data'] = $this->db->like('first_name', $_GET['q'], 'both')->or_like('last_name', $_GET['q'])->get('familyplus')->result();
			}
			$data['title'] = "Familyplus | Dashboard";
			$this->load->view('include/header',$data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('home');
			$this->load->view('include/footer');
			
		}

		public function profile()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');

		}
			# code...
			$data['title'] = "Familyplus | Dashboard";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('profile');
			$this->load->view('template/footer');
		}


		public function faf()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');

		}
			# code...
			$data['title'] = "Familyplus | faf";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('faf');
			$this->load->view('template/footer');
		}

    }

?>