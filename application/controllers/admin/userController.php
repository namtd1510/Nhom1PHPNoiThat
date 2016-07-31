<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends Admin_Controller {

    var $table = 'user';
    var $table_field = array("user_name", "password", "email", "full_name");
    var $require_field = array("user_name", "password", "email", "full_name");
    var $post_field = array("user_name", "password", "email", "full_name");    
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->Model("UserModel");
        //$this->load->helper('cookie');
    }

    public function index() {

        if (isset($this->session->userdata['user_session'])) {
            redirect('admin/Dashboard');
        }
        $this->load->view('admin/login_view');
    }

    public function ajax_list() {
        $list = $this->UserModel->get_datatables($this->table);
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
            "recordsTotal" => $this->UserModel->count_all($this->table),
            "recordsFiltered" => $this->UserModel->count_filtered($this->table),
            "data" => $data,
        );
        echo json_encode($output);
    }
    
            
    public function ajax_add() {
        $this->validate($this->require_field);
        $data=$this->get_post_param($this->post_field);
        $insert = $this->UserModel->save($data, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->UserModel->get_by_id($id, $this->table);
        echo json_encode($data);
    }
    
    public function ajax_update() {
        $this->validate($this->require_field);
        $data=$this->get_post_param($this->post_field);
        $this->UserModel->update(array('id' => $this->input->post('id')), $data, $this->table);
        echo json_encode(array("status" => TRUE));
    }    
    
    public function ajax_delete($id) {
        $this->UserModel->delete_by_id($id, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function logout() {
        $this->session->sess_destroy(); // Unset session of user
        //delete_cookie('user_cookie');	
        //setcookie("user_cookie","a",time() - 3600);
        redirect('admin/UserController');
    }

    public function check_user_login() {
        $data['password'] = $this->input->post('password');
        $data['username'] = $this->input->post('username');
        $remember = (bool) $this->input->post('remember');
        if (isset($this->session->userdata['user']['id'])) {
            redirect(base_url('admin/Dashboard'));
        } else {
            if ($this->UserModel->checklogin($data)) {
                $user_info = array(
                    'username' => $data['username'],
                    'password' => $data['password']
                );
                //if ($remember) {
                //$cookie_time = 3600;
                //setcookie('user_cookie', 'a', time() + $cookie_time);
                //}
                $this->session->set_userdata('user_session', $user_info);
                redirect('admin/Dashboard');
            } else {
                $this->session->set_flashdata('message', 'Your username or password was entered incorrectlye');
                redirect('admin/UserController');
            }
        }
    }
}
