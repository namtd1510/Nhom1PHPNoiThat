<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    //set the class variable.
    public $template = array();
    public $data = array();

    /* Loading the default libraries, helper, language */

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'language', 'url'));             
        // Load session library
        $this->load->library('session');
        
    }

    /* Front Page Layout */

    public function layout() {
        // making template and send data to view.

        $this->load->Model("CategoryModel");
        $data['category'] = $this->CategoryModel->listall();
        $this->template['megamenu'] = $this->load->view('layout/megamenu', $data, true);

        $this->template['header'] = $this->load->view('layout/header', $this->data, true);
        $this->template['content'] = $this->load->view('layout/content', $this->data, true);
        $this->template['topnew'] = $this->load->view('layout/topnew', $this->data, true);
        $this->template['recommendation'] = $this->load->view('layout/recommendation', $this->data, true);
        $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
        $this->template['footercontent'] = $this->load->view('layout/footercontent', $this->data, true);
        $this->load->view('layout/front', $this->template);
    }

    protected function render($the_view = NULL,$data,$dataname, $template = 'master') {
        if ($template == 'json' || $this->input->is_ajax_request()) {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        } else {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);     
            $this->data[$dataname]=$data;
            $this->load->view('templates/' . $template . '_view', $this->data);
        }
    }

}

class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    protected function render($the_view = NULL,$data,$dataname, $template = 'admin_master') {
        parent::render($the_view,$data,$dataname, $template);
    }
    
    /*public function ajax_list($obj,$table) {
        $list = $this->UserModel->get_datatables($table);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $u) {
            $no++;
            $row = array();
            $row[] = $u->user_name;
            $row[] = $u->password;
            $row[] = $u->email;
            $row[] = $u->full_name;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_user(' . "'" . $u->id . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user(' . "'" . $u->id . "'" . ')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->UserModel->count_all($table),
            "recordsFiltered" => $this->UserModel->count_filtered($table),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }*/

}

class Public_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

}
