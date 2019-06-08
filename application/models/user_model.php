<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // insert
    function insert_user($user_data) {
        $this->db->insert('tbl_users', $user_data);
        return $this->db->insert_id();
    }

    function insert_data($category_data) {
        return $this->db->insert('tbl_registrations', $category_data);
    }

    function fetch_doctors() {

        $query = $this->db->query("select * from  doctors_table");
        return $query->result();
    }

    function get_cateogry_list() {
        $query = $this->db->query("select * from tbl_categories");
        return $query->result();
    }

}

?>