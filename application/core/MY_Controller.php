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
        $this->load->library('ion_auth');
        //$this->lang->load('english');
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

    protected function render($the_view = NULL, $template = 'master') {
        if ($template == 'json' || $this->input->is_ajax_request()) {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        } else {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);     
            $this->load->view('templates/' . $template . '_view', $this->data);
        }
    }

}

class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    protected function render($the_view = NULL, $template = 'admin_master') {
        parent::render($the_view, $template);
    }

}

class Public_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

}
