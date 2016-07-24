<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        /* $this->load->view('admin/dashboard_view'); */
        $this->load->Model("UserModel");
        $dataname='user';
        $this->data[$dataname] = $this->UserModel->listall();
        //$this->template['megamenu'] = $this->load->view('layout/megamenu', $data, true);
        $this->render('admin/dashboard_view', $this->data,$dataname);
    }

}
