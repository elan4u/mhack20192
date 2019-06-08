<?php defined('BASEPATH') OR exit('No direct script access allowed');

class time_slot extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		//$this->load->database();
		$this->load->model('user_model');
	}

    
 public function index() {
      $this->load->view('time_slots');
      
    }
    
   
}
?>