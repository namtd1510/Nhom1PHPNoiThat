<?php

class _SlideModel extends MY_Model {

    //var $table = 'user';
    var $column_order = array('slide_url','slide_url', null); //set column field database for datatable orderable
    var $column_search = array('slide_url','slide_date'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order 

    public function __construct() {
        parent::__construct();
    }

    public function listall() {
        $query = $this->db->get("slide");
        return $query->result_array();
    }    

}
