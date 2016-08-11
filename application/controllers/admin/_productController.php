<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class _ProductController extends Admin_Controller {

    var $table = 'product';
    var $table_field = array("category_name", "product_name","sku","vote","color","material","detail","product_date","price");
    var $require_field = array("category_id", "product_name","sku","vote","color","material","detail","product_date","price");
    var $post_field = array("category_id", "product_name","sku","vote","color","material","detail","product_date","price");
    
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->Model("admin/_ProductModel", 'ProductModel');
        //$this->load->helper('cookie');
    }

    public function index() {
        
        $dataname = 'product';
        $this->data[$dataname] = $this->ProductModel->listall();

        //$this->template['megamenu'] = $this->load->view('layout/megamenu', $data, true);
        $this->render('admin/product_view', $this->data, $dataname);
    }
    
    public function ajax_list() {
        $list = $this->ProductModel->get_datatables2($this->table,'category');
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $row = array();
            for ($i = 0; $i < count($this->table_field); $i++) {
                $row[] = get_object_vars($obj)[$this->table_field[$i]];
            }
            $row[] = $this->string_action($obj->id).'<a class="btn btn-success" href="'.  site_url('admin/_productController/upload_product/'.$obj->id).'" title="Upload Image"><i class="glyphicon glyphicon-pencil"></i> Upload Image</a>';
           
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->ProductModel->count_all($this->table),
            "recordsFiltered" => $this->ProductModel->count_filtered($this->table),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function ajax_add() {
        $this->validate($this->require_field);
        $data = $this->get_post_param($this->post_field);
        $insert = $this->ProductModel->save($data, $this->table);
        echo json_encode(array("status" => TRUE));
    }
    public function get_category()
    {
        $this->load->Model("CategoryModel");
        $data=$this->CategoryModel->listall();
        echo json_encode($data);
        
    }
    public function ajax_edit($id) {
        $data[0] = $this->ProductModel->get_by_id2($id, $this->table,'category');
        $this->load->Model("CategoryModel");
        $data[1]=$this->CategoryModel->listall();
        echo json_encode($data);
    }

    public function ajax_update() {
        $this->validate($this->require_field);
        $data = $this->get_post_param($this->post_field);
        $this->ProductModel->update(array('id' => $this->input->post('id')), $data, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->ProductModel->delete_by_id($id, $this->table);
        echo json_encode(array("status" => TRUE));
    }
    function upload_product($id)
    {
        //load file upload form
        $this->data['product'] = $this->ProductModel->get_by_id3($id, $this->table,'image');
        
        $this->data['product_id']=$id;
        $this->load->view('admin/upload_product',$this->data);
    }
    function upload()
    {
        //set preferences
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './uploads/product/';
        $config['allowed_types'] = 'jpg';
        $config['max_size']    = '1000';

        //load upload class library
        $this->load->library('upload', $config);
        $data['product_id']=$this->input->post('product_id');
        
        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            
            $data['upload_error'] = array('error' => $this->upload->display_errors());
            $data['product'] = $this->ProductModel->get_by_id3($data['product_id'], $this->table,'image');
            $this->load->view('admin/upload_product', $data);
            
        }
        else
        {
            // case - success
            
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            
            $date=date("Y-m-d");
            $image_url=  base_url().'uploads/product/'.$upload_data['file_name'];
            $data_insert['image_url']=$image_url;
            $data_insert['product_id']=$this->input->post('product_id');
            $data_insert['status']=0;
            $this->ProductModel->save($data_insert, 'image');
            $data['product'] = $this->ProductModel->get_by_id3($data['product_id'], $this->table,'image');
            $this->load->view('admin/upload_product',$data);
            //$this->load->view('admin/upload_product', $data);
            //redirect('admin/_productController/upload_product/'.$this->input->post('product_id'), 'refresh');
        }
        //redirect('_slideController/index', 'refresh');
    }
    function delete_image()
    {
        $this->load->helper('file');
        $image_id = $this->uri->segment(4);
        $product_id  = $this->uri->segment(5);
        $data=$this->ProductModel->get_by_id($image_id, 'image');
        $file_name = substr(strrchr($data->image_url, "/"), 1);
        unlink('uploads/product/'.$file_name);
        $this->ProductModel->delete_by_id($image_id, 'image'); 
        redirect('admin/_productController/upload_product/'.$product_id, 'refresh');
    }

}
