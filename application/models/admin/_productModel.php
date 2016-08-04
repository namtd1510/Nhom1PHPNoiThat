<?php

class _ProductModel extends MY_Model {

    //var $table = 'user';
    var $column_order = array("product_name","sku","vote","color","metarial","detail","product_date","price", null); //set column field database for datatable orderable
    var $column_search = array("product_name","sku","vote","color","metarial","detail","product_date","price"); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order 

    public function __construct() {
        parent::__construct();
    }

    public function listall() {
        $query = $this->db->get("product");
        return $query->result_array();
    }    

}
