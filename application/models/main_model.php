<?php 
class Main_Model Extends CI_Model {  
	function __construct() {
		$this->load->database();
	}

	public function setCharacter() { 
			$data = array('name'=>$this->input->post('name'),
						'moxy'=>$this->input->post('moxy'),
						'gumption'=>$this->input->post('gumption'),
						'passion'=>$this->input->post('passion'),	
						'style'=>$this->input->post('style')
					); 

			$this->db->insert('car_character', $data); 

	}



}

?>