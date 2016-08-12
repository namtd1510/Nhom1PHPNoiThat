<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index($category_id=null) {
        $this->middle = 'home/home'; // its your view name, change for as per requirement.
        $this->layout($category_id);
    }
    public function category($category_id) {
        $this->middle = 'home/home'; // its your view name, change for as per requirement.        
        $this->layout($category_id);
    }

}
