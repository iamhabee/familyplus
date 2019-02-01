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
			$this->load->view('template/header', $data);
			$this->load->view('template/nav', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('home');
			$this->load->view('template/footer');
			
		}

		public function counsellor()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');

		}
			# code...
			$data['title'] = "Familyplus | counsellor";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav1', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('counsellor_dashboard');
			$this->load->view('template/footer');
		}

		public function married()
		{
			if ( !isset($this->session->user_data) ) {
       		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');

		}
			# code...
			$data['title'] = "Familyplus | Married";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav2', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('married_dashboard');
			$this->load->view('template/footer');
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

		// public function search(){
		// 	// $this->load->model('user');
		// 	$firstname = $_GET['q'];
		// 	if (isset($firstname) && !empty($firstname)) {
		// 		$data['search'] = $this->user->search($firstname);
		// 		$this->load->view('home', $data);
		// 	}else{
		// 		redirect('admin');
		// 	}
		// }

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