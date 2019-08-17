<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index()
	{
		$this->load->view('template/admin/header');
		$this->load->view('course/index');
		$this->load->view('template/admin/footer');
    }
    
    public function create()
	{
		$this->load->view('template/admin/header');
		$this->load->view('course/create');
		$this->load->view('template/admin/footer');
	}

}
