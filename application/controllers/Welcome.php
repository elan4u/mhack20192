<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('blank');
    }

    public function location() {
        $this->load->view('current_location');
    }
	
	public function patient_dashboard() {
        $this->load->view('patient_dashboard');
    }
    
    public function doctor($user_id) {
        $data = array(
            'page' => 'chat_doc',
            'user_id' => $user_id,
            'user_type' => 'doctor'
        );
        $this->load->view('chat',$data);
    }
    
    public function patient($user_id) {
        $data = array(
            'page' => 'chat_patient',
            'user_id' => $user_id,
            'user_type' => 'patient'
        );
        $this->load->view('chat1',$data);
    }

}