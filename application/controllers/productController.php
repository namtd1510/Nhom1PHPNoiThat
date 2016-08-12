<?php

class ProductController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('ProductModel');
    }
    public $data = array();
    public function index($id) {

        $data['product'] = $this->ProductModel->get_by_id_array($id,'category','product');
        $data['product_image'] = $this->ProductModel->get_by_id3($id,'product','image');
        $data['category'] = $this->ProductModel->list_all('category');
       
        //$this->template['megamenu'] = $this->load->view('layout/megamenu', $data, true);
        $this->load->view('product_view',$data);
    }

}
