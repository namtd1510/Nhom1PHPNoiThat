<?php

class CategoryModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function listall(){
        $query=$this->db->get("category");
        return $query->result_array();
    }
}
