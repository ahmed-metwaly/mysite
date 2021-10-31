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
        $this->load->helper('form');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->model('M_model');
    }

  public function editGitFile()
  {
      return false;
  }
    
    public function index() {
        
        // get count feedbacks
        $data['feeds'] = $this->M_model->getCount('feedback');
        
        
        
        $this->load->view('admin/index', $data);
    }

}
