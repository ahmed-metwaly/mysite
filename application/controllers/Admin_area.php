<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_area
 *  this admin class 
 * @author Ahmed
 */
class Admin_area extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $data['uri'] = $this->uri;
        $this->load->view('admin/index', $data);
    }

}
