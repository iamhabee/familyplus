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

		public function register_user_chat($user_detail){

			$sql = $this->db->insert_string('users', $user_detail);
			return $this->db->query($sql);

		}


		public function get_user_by_email($email){
			// return $email;
			$this->db->select('*');
			$this->db->from('familyplus');
			$this->db->where('email', $email);
			return $this->db->get()->row();
		}

		public function delete_user($id){
			$this->db->where('id', $id)->delete('familyplus');
			return true;
		}
		
		public function delete_schedule($id){
			$this->db->where('user_id', $id)->delete('scheduler');
			return true;
		}

		public function get_comunity(){

			$this->db->from('comunity');
			$query=$this->db->get();
			return $query->result();
		}

		public function get_users(){
			$this->db->select('*');
			$this->db->from('familyplus');
			$query=$this->db->get();
			return $query->result();
		}

		public function get_schedule($user_id){
			// return $email;
			$this->db->select('*');
			$this->db->from('scheduler');
			$this->db->where('user_id', $user_id);
			return $this->db->get()->row();
		}
		// public function search($file_name){

		// 	$this->db->select('*');
		// 	$this->db->from('familyplus');
		// 	$this->db->like('first_name', $first_name);
		// 	$query = $this->db->get();
		// 	if ($qury->num_rows() > 0) {
		// 		return $query->result();
		// 	}else{
		// 		return $query->result();
		// 	}
			
		// }

	}

?>