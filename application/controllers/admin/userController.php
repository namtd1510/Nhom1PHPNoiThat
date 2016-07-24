<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->Model("UserModel");
        //$this->load->helper('cookie');
    }
    public function account_manager()
    {
        $data=$this->UserModel->listall();
        $this->load->view('admin/user_view',$data);
    }
    public function index() {
        
        if (isset($this->session->userdata['user_session'])) {
            redirect('admin/Dashboard');
        }
        $this->load->view('admin/login_view');
    }

    public function logout() {
        $this->session->sess_destroy();	// Unset session of user
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
