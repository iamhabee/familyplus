<?php 

	/**
	 * 
	 */
	class User extends CI_Model
	{
		
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}


		public function register_user($user_detail){

			$sql = $this->db->insert_string('familyplus', $user_detail);
			return $this->db->query($sql);

		}


		public function get_user_by_email($email){
			// return $email;
			$this->db->select('*');
			$this->db->from('familyplus');
			$this->db->where('email', $email);
			return $this->db->get()->row();
		}

		public function update_user_image($user_image){
			return $this->db->update('familyplus', $user_image);
		}
		

	}

?>