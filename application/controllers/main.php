<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main Extends CI_Controller { 
	
	public function index() { 
			$this->createName();
		}
	

	

	function createName() { 
		$this->load->model('main_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');

		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('main/view');
			// STORE info into database here. 
			// Need to update Form when user creates name

		}
		else
		{
			$this->main_model->setCharacter();	
			$this->load->view('main/createNameSuccess');
		}
	}

	


}