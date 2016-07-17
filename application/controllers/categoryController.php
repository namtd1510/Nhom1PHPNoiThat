<?php
class CategoryController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->Model("CategoryModel");
        $data=$this->CategoryModel->listall();
        $this->load->View("megamenu",$data);
        
    }
}
