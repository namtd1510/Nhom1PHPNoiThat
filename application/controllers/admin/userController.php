<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends Admin_Controller {

    var $table = 'user';
    var $table_field = array("user_name", "password", "email", "full_name");
    var $field_require = array("user_name", "password", "email", "full_name");
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

    public function user_list() {
        $this->ajax_list($this->table_field, $this->table);
    }

    public function ajax_add() {
        $this->validate($this->field_require);
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'full_name' => $this->input->post('full_name'),
        );
        $insert = $this->UserModel->save($data, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function user_edit($id) {
        $this->ajax_edit($id, $this->table);
    }

    public function ajax_update() {
        $this->validate($this->field_require);
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'full_name' => $this->input->post('full_name'),
        );
        $this->UserModel->update(array('id' => $this->input->post('id')), $data, $this->table);
        echo json_encode(array("status" => TRUE));
    }

    public function user_delete($id) {
        $this->ajax_delete($id, $this->table);
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
