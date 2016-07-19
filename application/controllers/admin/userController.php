<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class UserController extends Admin_Controller {

    function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
        
        $this->load->Model("UserModel");
    }

    public function index() {
        $this->load->view('admin/user_view');
        
    }
    public function check_user_login() {
        $data['password']=$this->input->post('password');
        $data['username']=$this->input->post('username');
        $remember = (bool) $this->input->post('remember');
        if($this->UserModel->checklogin($data))
        {
            $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);
            redirect('admin/Dashboard');
        }
        else {
            $this->session->set_flashdata('message', 'Your username or password was entered incorrectlye');
            redirect('admin/UserController');
        }
        
    }
}
