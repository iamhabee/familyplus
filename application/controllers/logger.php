<?php 
	
	/**
	 * 
	 */
	class Logger extends CI_Controller
	{
		
	public function getData(){

			$details = $this->user->get_user_by_email('aisha@gmail.com');
			var_dump($details);
		}		
	}
?>