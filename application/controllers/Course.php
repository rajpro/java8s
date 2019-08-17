<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model("CourseDB");
    }
    
    public function index()
	{
		$data['results'] = $this->CourseDB->pagination();
		$this->load->view('template/admin/header');
		$this->load->view('course/index', $data);
		$this->load->view('template/admin/footer');
    }
    
    public function create()
	{
		$this->form_validation->set_rules('title', 'Email', 'required');
        if ($this->form_validation->run() == TRUE)
        {
			$post = $this->input->post();
			$post_data = [
				"p_title" => $post['title'],
				"p_content" => $post['content'],
				"p_content_type" => "course",
				"p_comment_status" => (!empty($post['comment_status'])?1:0)
			];
			$setting_data = [
				"name" => "post_setting",
				"value" => json_encode(["price"=>$post["price"], "sale_price"=>$post['sale_price'], "passing_value"=>$post['passing_value']])
			];
			if ($result = $this->CourseDB->save($post_data)) {
				$setting_data["referral"] = $result;
				$this->CourseDB->save_settings($setting_data);
				redirect(base_url('course'));
			}else{
				$this->session->set_tempdata('warning', 'Something is wrong. Please try again later.');
			}
        }
		$this->load->view('template/admin/header');
		$this->load->view('course/create');
		$this->load->view('template/admin/footer');
	}

	public function test() {
		print_r($this->CourseDB->pagination());
	}

}
