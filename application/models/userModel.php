<?php

class UserModel extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listall() {
        $query = $this->db->get("user");
        return $query->result_array();
    }

    // Read data using username and password
    public function checklogin($data) {

        $condition = "user_name =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

}
