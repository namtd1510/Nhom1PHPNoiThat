<?php

class ProductModel extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listall($limit=null) {
        $this->db->select("image.image_url,status,product.*");
        $this->db->from('product');
        $this->db->join('image', 'product.id = image.product_id');
        $this->db->where('image.status', '0');
        $this->db->limit('5');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id2($id, $table, $table2) {
        $this->db->select("category.category_name,product.*");
        $this->db->from($table);
        $this->db->join($table2, 'product.category_id = category.id');
        $this->db->where('product.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_by_id_array($id, $table, $table2) {
        $this->db->select("category.category_name,product.*");
        $this->db->from($table);
        $this->db->join($table2, 'product.category_id = category.id');
        $this->db->where('product.id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    private function _get_datatables_query2($table, $table2) {
        $this->db->select($table2 . ".category_name," . $table . ".*");
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

    function get_datatables2($table, $table2) {
        $this->_get_datatables_query2($table, $table2);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

}
