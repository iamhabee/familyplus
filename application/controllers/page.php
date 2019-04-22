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
			$this->load->view('template/nav');
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

		public function resetPassword()
		{

			$data['title'] = "Familyplus | Reset Password";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav');
			$this->load->view('reset-password');
			$this->load->view('template/footer');
		}

		public function reset($id=0)
		{
			$data['rec'] = $this->user->article($id);
			$data['title'] = "Familyplus | Reset Password";
			$this->load->view('template/header', $data);
			$this->load->view('template/nav');
			$this->load->view('reset', $data);
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
			$this->load->view('include/header',$data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('consultation');
			$this->load->view('include/adbar');
			$this->load->view('include/footer');
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
			$this->load->view('include/header',$data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('marital-status');
			$this->load->view('include/adbar');
			$this->load->view('include/footer');
		}

		public function marriageArticle($id=0)
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');
		}
			$data['rec'] = $this->user->article($id);
			$data['title'] = "Familyplus | marriage-articles";
			$this->load->view('include/header', $data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('marriage-articles',$data);
			$this->load->view('include/adbar');
			$this->load->view('include/footer');
		}

		public function communities($post_id=0)
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');
		}
			$data['rec'] = $this->user->community_post($post_id);
			$data['title'] = "Familyplus | comments";
			$this->load->view('include/header', $data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('communities',$data);
			$this->load->view('include/adbar');
			$this->load->view('include/footer');
		}

		public function counsellor_bio()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');
		}
			# code...
			$data['title'] = "Familyplus | Counsellor's Biography";
			$this->load->view('include/header',$data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('counsellor_bio');
			$this->load->view('include/adbar');
			$this->load->view('include/footer');
		}


		public function family_quiz()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');
		}
			# code...
			$data['title'] = "Familyplus | Family Quiz";
			$this->load->view('include/header',$data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('family_quiz');
			$this->load->view('include/adbar');
			$this->load->view('include/footer');
		}

		public function awardee()
		{
			if ( !isset($this->session->user_data) ) {
    		$this->session->set_flashdata('msg', "Please Login to continue");
			$this->session->set_flashdata('flag', 'danger');
			redirect('login');
		}
			# code...
			$data['title'] = "Familyplus | Awardee";
			$this->load->view('include/header',$data);
			$this->load->view('include/topbar');
			$this->load->view('include/sidebar');
			$this->load->view('awardee');
			$this->load->view('include/adbar');
			$this->load->view('include/footer');
		}

		public function live_search(){
			$res = array('status' => 1, "msg"=>$this->db->like('first_name', $_GET['q'])->get('familyplus')->result());
			echo json_encode($res);
		}
    }

?>