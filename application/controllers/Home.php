<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('HomeDB');
	}

	public function index()
	{
		$data['courses'] = $this->HomeDB->courses();
		$this->load->view('template/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function courses()
	{
		$this->load->view('template/header');
		$this->load->view('home/course-grid');
		$this->load->view('template/footer');
	}

	public function course_detail($url)
	{
		$data['courses'] = $this->HomeDB->courses();
		$data['course_detail'] = $this->HomeDB->course_detail($url);
		$data['course_lessons'] = $this->HomeDB->course_lessons($url);
		$this->load->view('template/header', $data);
		$this->load->view('home/course-detail', $data);
		$this->load->view('template/footer', $data);
	}

	public function cart($url="")
	{
		$data['page'] = 'theia-exception';
		$this->load->view('template/header', $data);
		switch ($url) {
			case 'payment':
				$this->load->view('home/cart-two', $data);
				break;
			case 'finish':
				$this->load->view('home/cart-three', $data);
				break;
			default:
				$this->load->view('home/cart-one', $data);
				break;
		}
		$this->load->view('template/footer', $data);
	}
}
