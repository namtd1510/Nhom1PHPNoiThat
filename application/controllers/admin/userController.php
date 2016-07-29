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

    public function index() {

        if (isset($this->session->userdata['user_session'])) {
            redirect('admin/Dashboard');
        }
        $this->load->view('admin/login_view');
    }

    /* public function account_manager() {
      $data = $this->UserModel->listall();
      $this->load->view('admin/user_view', $data);
      } */

    public function ajax_list() {
        $list = $this->UserModel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $u) {
            $no++;
            $row = array();
            $row[] = $u->user_name;
            $row[] = $u->password;
            $row[] = $u->email;
            $row[] = $u->full_name;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_user(' . "'" . $u->id . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user(' . "'" . $u->id . "'" . ')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->UserModel->count_all(),
            "recordsFiltered" => $this->UserModel->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_add() {
        $this->_validate();
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'full_name' => $this->input->post('full_name'),
        );
        $insert = $this->UserModel->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->UserModel->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update() {
        $this->_validate();
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'full_name' => $this->input->post('full_name'),
        );
        $this->UserModel->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->UserModel->delete_by_id($id);
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

    private function _validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('user_name') == '') {
            $data['inputerror'][] = 'user_name';
            $data['error_string'][] = 'User Name is required';
            $data['status'] = FALSE;
        }

        if ($this->input->post('password') == '') {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Password is required';
            $data['status'] = FALSE;
        }

        if ($this->input->post('email') == '') {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'Email is required';
            $data['status'] = FALSE;
        }

        if ($this->input->post('full_name') == '') {
            $data['inputerror'][] = 'full_name';
            $data['error_string'][] = 'Full Name is required';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

}
