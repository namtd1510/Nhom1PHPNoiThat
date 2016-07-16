<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class MY_Controller extends CI_Controller 
    { 
        //set the class variable.
        public $template  = array();
        public $data      = array();
		
        /*Loading the default libraries, helper, language */
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form','language','url'));
            //$this->lang->load('english');
        }
		
        /*Front Page Layout*/
        public function layout() {
            // making template and send data to view.
            $this->template['megamenu']   = $this->load->view('layout/megamenu', $this->data, true);
            $this->template['header']   = $this->load->view('layout/header', $this->data, true);
            $this->template['content']   = $this->load->view('layout/content', $this->data, true);
            $this->template['topnew'] = $this->load->view('layout/topnew', $this->data, true);
            $this->template['recommendation'] = $this->load->view('layout/recommendation', $this->data, true);
            $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
            $this->template['footercontent'] = $this->load->view('layout/footercontent', $this->data, true);            
            $this->load->view('layout/front', $this->template);
        }
    }