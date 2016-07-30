<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Model extends CI_Model {    
    //set the class variable.
    public $template = array();
    public $data = array();
    /* Loading the default libraries, helper, language */

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'language', 'url'));
        $this->load->database();
    }
    private function _get_datatables_query($table) {
        $this->db->from($table);
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

    function get_datatables($table) {
        $this->_get_datatables_query($table);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    public function count_all($table) {
        $this->db->from($table);
        return $this->db->count_all_results();
    }
    public function count_filtered($table) {
        $this->_get_datatables_query($table);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function delete_by_id($id,$table) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
    public function get_by_id($id,$table) {
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->row();
    }
    
    public function update($where, $data,$table) {
        $this->db->update($table, $data, $where);
        return $this->db->affected_rows();
    }
    public function save($data,$table) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
}