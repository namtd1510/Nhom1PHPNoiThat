<?php

class UserModel extends MY_Model {

    //var $table = 'user';
    var $column_order = array('user_name', 'password', 'email', 'full_name', null); //set column field database for datatable orderable
    var $column_search = array('user_name', 'email', 'full_name'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order 

    public function __construct() {
        parent::__construct();
    }

    public function listall() {
        $query = $this->db->get("user");
        return $query->result_array();
    }

    /* public function insert($data) {
      $this->db->insert('user', $data);
      } */

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
