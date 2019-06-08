<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DoctorsAppointment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('doctors_appointment');
    }

    public function get_doctors() {

        $doctors = $this->user_model->fetch_doctors();
        // var_dump($doctors);exit;
        echo json_encode($doctors);
    }

    public function registration_form() {
        $this->load->view('registration_form');
    }

    public function get_cateogry() {

        $category = $this->user_model->get_cateogry_list();
        echo json_encode($category);
    }

    function save_data() {

        $lastname = array(
            'Mischke', 'Serna', 'Pingree', 'Mcnaught', 'Pepper', 'Schildgen', 'Mongold',
            'Wrona', 'Geddes', 'Lanz', 'Fetzer', 'Schroeder', 'Block', 'Mayoral', 'Fleishman',
            'Roberie', 'Latson', 'Lupo', 'Motsinger', 'Drews', 'Coby', 'Redner', 'Culton',
            'Howe', 'Stoval', 'Michaud', 'Mote', 'Schewe', 'Ramage',
        );
        $gender1 = array(
            'female',
            'male',
        );
        for ($randomNumber = mt_rand(1, 9), $i = 1; $i < 10; $i++) {
            $randomNumber .= mt_rand(0, 9);
        }

        $first_name = $this->input->post('first_name');
        $last_name = $lastname[rand(0, count($lastname) - 1)];
        $gender = $gender1[rand(0, count($gender1) - 1)];
        $phone = $randomNumber;

        $user_data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'mobile_number' => $phone
        );
        $user_id = $this->user_model->insert_user($user_data);
        $date = date("Y/m/d H:i:s");
        $category = $this->input->post('category_filter');
        $remarks = $this->input->post('remarks');
        $category_data = array(
            'user_id' => $user_id,
            'register_date' => $date,
            'category' => $category,
            'remarks' => $remarks
        );
        $this->user_model->insert_data($category_data);
        redirect('DoctorsAppointment/registration_form');
    }

}

?>