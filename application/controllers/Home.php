<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}

	public function courses()
	{
		$this->load->view('template/header');
		$this->load->view('home/course-grid');
		$this->load->view('template/footer');
	}

	public function course_detail()
	{
		$this->load->view('template/header');
		$this->load->view('home/course-detail');
		$this->load->view('template/footer');
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
