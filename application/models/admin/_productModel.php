<?php

class _ProductModel extends MY_Model {

    //var $table = 'user';
    var $column_order = array("product_name", "sku", "vote", "color", "metarial", "detail", "product_date", "price", null); //set column field database for datatable orderable
    var $column_search = array("product_name", "sku", "vote", "color", "metarial", "detail", "product_date", "price"); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('product.id' => 'desc'); // default order 

    public function __construct() {
        parent::__construct();
    }

    public function listall() {
        $query = $this->db->get("product");
        return $query->result_array();
    }
    public function get_by_id2($id,$table,$table2) {
        $this->db->select("category.category_name,product.*");    
        $this->db->from($table);        
        $this->db->join($table2, 'product.category_id = category.id');
        $this->db->where('product.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    private function _get_datatables_query2($table,$table2) {
        $this->db->select($table2.".category_name,".$table.".*"); 
        $this->db->from($table);
        $this->db->join($table2, 'product.category_id = category.id');
        $i = 0;
        foreach ($this->column_search as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables2($table,$table2) {
        $this->_get_datatables_query2($table,$table2);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

}
