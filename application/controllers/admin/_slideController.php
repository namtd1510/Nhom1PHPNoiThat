<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class _SlideController extends Admin_Controller {

    var $table = 'slide';

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
            $row[] = $obj->slide_url;
            $row[] = $obj->slide_date;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_slide(' . "'" . $obj->id . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_slide(' . "'" . $obj->id . "'" . ')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->SlideModel->count_all($this->table),
            "recordsFiltered" => $this->SlideModel->count_filtered($this->table),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    public function ajax_add() {
        $this->_validate();
        $data = array(
            'slide_url' => $this->input->post('slide_url'),
            'slide_date' => $this->input->post('slide_date'),
        );
        $insert = $this->SlideModel->save($data,$this->table);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_edit($id) {
        $data = $this->SlideModel->get_by_id($id, $this->table);
        echo json_encode($data);
    }
    public function ajax_update() {
        $this->_validate();
        $data = array(
            'slide_url' => $this->input->post('slide_url'),
            'slide_date' => $this->input->post('slide_date'),
        );
        $this->SlideModel->update(array('id' => $this->input->post('id')), $data,$this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->SlideModel->delete_by_id($id, $this->table);
        echo json_encode(array("status" => TRUE));
    }
    private function _validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('slide_url') == '') {
            $data['inputerror'][] = 'slide_url';
            $data['error_string'][] = 'Slide URL is required';
            $data['status'] = FALSE;
        }

        if ($this->input->post('slide_date') == '') {
            $data['inputerror'][] = 'slide_date';
            $data['error_string'][] = 'Slide Date is required';
            $data['status'] = FALSE;
        }


        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

}
