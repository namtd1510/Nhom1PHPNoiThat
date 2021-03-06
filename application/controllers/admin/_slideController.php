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
        $this->load->Model("admin/_SlideModel", 'SlideModel');
        //$this->load->helper('cookie');
    }

    public function index() {
        /* $this->load->view('admin/dashboard_view'); */
        $this->load->Model("SlideModel");
        $dataname = 'slide';
        $this->data[$dataname] = $this->SlideModel->list_all($this->table);

        //$this->template['megamenu'] = $this->load->view('layout/megamenu', $data, true);
        $this->render('admin/slide_view', $this->data, $dataname);
    }

    public function ajax_list() {
        $list = $this->SlideModel->get_datatables($this->table);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $row = array();
            for ($i = 0; $i < count($this->table_field); $i++) {
                if ($this->table_field[$i] == "slide_url") {
                    $row[] = "<a href='#'  class='pop' > <img  src=" . get_object_vars($obj)[$this->table_field[$i]] . " width=80 height=80></a>";
                } else {
                    $row[] = get_object_vars($obj)[$this->table_field[$i]];
                }
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
        $data = $this->get_post_param($this->post_field);
        $insert = $this->SlideModel->save($data, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->SlideModel->get_by_id($id, $this->table);
        echo json_encode($data);
    }

    public function ajax_update() {
        $this->validate($this->require_field);
        $data = $this->get_post_param($this->post_field);
        $this->SlideModel->update(array('id' => $this->input->post('id')), $data, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->SlideModel->delete_by_id($id, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    function upload_slide() {
        //load file upload form
        $data['slide'] = $this->SlideModel->list_all('slide');
        $this->load->view('admin/upload_slide', $data);
    }

    function upload() {
        //set preferences
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './uploads/slide/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '1000';

        //load upload class library
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filename')) {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $data['slide'] = $this->SlideModel->list_all('slide');
            $this->load->view('admin/upload_slide', $upload_error);
        } else {
            // case - success
            $upload_data = $this->upload->data();
            $date = date("Y-m-d");
            $slide_url = base_url() . 'uploads/slide/' . $upload_data['file_name'];
            $data_insert['slide_url'] = $slide_url;
            $data_insert['slide_date'] = $date;
            $this->SlideModel->save($data_insert, $this->table);
            
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            $data['slide'] = $this->SlideModel->list_all('slide');
            $this->load->view('admin/upload_slide', $data);

            
        }
        //redirect('_slideController/index', 'refresh');
    }

    function delete_image($slide_id) {
        $this->load->helper('file');
        $data = $this->SlideModel->get_by_id($slide_id, 'slide');
        $file_name = substr(strrchr($data->slide_url, "/"), 1);
        if (file_exists('uploads/slide/'.$file_name))
            unlink('uploads/slide/' . $file_name);
        $this->SlideModel->delete_by_id($slide_id, 'slide');
        redirect('admin/_slideController/upload_slide', 'refresh');
    }

}
