<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		//$this->load->database();
		$this->load->model('user_model');
	}
    
	//loading login_view
	public function index()
    {	
		$this->load->view('login');
		
	}
		
		//on click of submit
	public function submit()
    {               // get form input
		$email = $this->input->post("email");
               
		// form validation
		$this->form_validation->set_rules("email", "Email Id", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
        {

			// validation fail
			$this->load->view('login');
			
		}
		else
		{
			// check for user credentials
			$query = $this->db->get_where('user_table', array('first_name' => $email));
			$uresult = $query->row_array();
            
			if (count($uresult) > 0)
			{
					//set session
				$sess_data = array('login' => TRUE,
				
				
				'first_name' => $uresult['first_name'],
				
			
				);
		
				$this->session->set_userdata($sess_data);
                               // print_r($_SESSION);exit;
				redirect('DoctorsAppointment/index');
                        }
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID</div>');
				
				redirect('login/index');
			}
		}
    }
}