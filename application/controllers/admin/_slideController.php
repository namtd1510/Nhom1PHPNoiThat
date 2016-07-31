<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class _SlideController extends Admin_Controller {

    var $table = 'slide';
    var $table_field = array("slide_url", "slide_date");
    var $require_field = array("slide_url", "slide_date");
    var $post_field = array("slide_url", "slide_date");
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->Model("admin/_SlideModel",'SlideModel');
        //$this->load->helper('cookie');
    }

    public function index() {        
        /* $this->load->view('admin/dashboard_view'); */
        $this->load->Model("SlideModel");
        $dataname='slide';
        $this->data[$dataname] = $this->SlideModel->listall();
        
        //$this->template['megamenu'] = $this->load->view('layout/megamenu', $data, true);
        $this->render('admin/slide_view', $this->data,$dataname);
    }
    public function ajax_list() {
        $list = $this->SlideModel->get_datatables($this->table);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $row = array();
            for ($i = 0; $i < count($this->table_field); $i++) {
                $row[] = get_object_vars($obj)[$this->table_field[$i]];
            }
            $row[] = $this->string_action($obj->id);
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->SlideModel->count_all($this->table),
            "recordsFiltered" => $this->SlideModel->count_filtered($this->table),
            "data" => $data,
        );
        echo json_encode($output);
    }
    public function ajax_add() {
        $this->validate($this->require_field);
        $data=$this->get_post_param($this->post_field);
        $insert = $this->SlideModel->save($data, $this->table);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_edit($id) {
        $data = $this->SlideModel->get_by_id($id, $this->table);
        echo json_encode($data);
    }
    public function ajax_update() {
        $this->validate($this->require_field);
        $data=$this->get_post_param($this->post_field);
        $this->SlideModel->update(array('id' => $this->input->post('id')), $data, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->SlideModel->delete_by_id($id, $this->table);
        echo json_encode(array("status" => TRUE));
    }
}
