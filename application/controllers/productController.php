<?php

class ProductController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('ProductModel');
    }
    public $data = array();
    public function index($id) {

        $data['product'] = $this->ProductModel->get_by_id2($id,'category','product');
       
        //$this->template['megamenu'] = $this->load->view('layout/megamenu', $data, true);
        $this->load->view('product_view',$data);
    }

}
