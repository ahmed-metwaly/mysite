<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Main
 *  this class main site class
 * @author Ahmed
 */

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('site/index');
    }

}
