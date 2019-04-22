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

			$this->db->order_by('id', 'DESC');
			$query=$this->db->get('comunity');
			return $query->result();
		}


// get comment with post_id
		public function get_comments($comment_id){

			$this->db->select('*');
			$this->db->from('comments');
			$this->db->where('comment_id', $comment_id);
			$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
		}

		public function get_questions($question_id){

			$this->db->select('*');
			$this->db->from('questions');
			$this->db->where('question_id', $question_id);
			$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
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
		public function article($id){
			$query = $this->db->query("SELECT * FROM maritalissues WHERE id=".$id);
			return $query->row();
		}

		public function community_post($post_id){
			$this->db->select('*');
			$this->db->from('comunity');
			$this->db->where('post_id', $post_id);
			return $this->db->get()->row();
		}

// insert comments in to database
		public function comments($data, $table){

			$res = $this->db->insert($table, $data ); 
 		if($res == 1)
 			return true;
 		else
 			return false;
		}

		public function comment_count($countId, $counter){

			$res = $this->db->update('comunity', ['comment_count' => $counter ], ['id' => $countId ] ); 
 		if($res == 1)
 			return true;
 		else
 			return false;
		}

		public function question_count($countId, $counter){

			$res = $this->db->update('maritalissues', ['comment_count' => $counter ], ['id' => $countId ] ); 
 		if($res == 1)
 			return true;
 		else
 			return false;
		}

		public function like_count($countId, $counter){

			$res = $this->db->update('comunity', ['like_count' => $counter ], ['id' => $countId ] ); 
 		if($res == 1)
 			return true;
 		else
 			return false;
		}

		public function get_count_no($count_id){

			$this->db->select('*');
			$this->db->from('comunity');
			$this->db->where('id', $count_id);
			$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
		}

		public function get_question_count_no($count_id){

			$this->db->select('*');
			$this->db->from('maritalissues');
			$this->db->where('id', $count_id);
			$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
		}

		public function get_username($user_id){
			$this->db->select('title','first_name');
			$this->db->from('familyplus');
			$this->db->where('id', $user_id);
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