<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
			parent::__construct();
			if($this->myauthentication->internal_check()){
				redirect(base_url());
			}
    }
    
    public function index()
		{
			// print_r($_SESSION);
			$this->load->view('template/admin/header');
			$this->load->view('dashboard/index');
			$this->load->view('template/admin/footer');
		}

}
