<?php

class CategoryModel extends MY_Model{
    public function __construct(){
        parent::__construct();
        
    }
    public function listall(){
        $query=$this->db->get("category");
        return $query->result_array();
    }
    public function listall_array(){
        $query=$this->db->get("category");
        return $query->result_array();
    }
}
