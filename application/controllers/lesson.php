<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends CI_Controller {

    public function __construct() {
		parent::__construct();
		if($this->myauthentication->internal_check()){
			redirect(base_url());
		}
		$this->load->model("LessonDB");
    }
    
    public function index()
		{
		$data['results'] = $this->LessonDB->pagination();
		$this->load->view('template/admin/header');
		$this->load->view('lesson/index', $data);
		$this->load->view('template/admin/footer');
    }
    
    public function create()
		{
			$this->form_validation->set_rules('title', 'Title', 'required');
					if ($this->form_validation->run() == TRUE)
					{
				$post = $this->input->post();
				$post_data = [
					"p_title" => $post['title'],
					"p_url" => str_replace(" ","-",strtolower($post['title'])),
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

		public function update($id)
		{
			$data['model'] = $this->CourseDB->findById($id);
			$data['model']['p_setting'] = (array)json_decode($data['model']['p_setting']);
			$this->form_validation->set_rules('title', 'Title', 'required');
				if ($this->form_validation->run() == TRUE)
				{
					$post = $this->input->post();
					$post_data = [
						"p_id" => $id,
						"p_title" => $post['title'],
						"p_url" => str_replace(" ","-",strtolower($post['title'])),
						"p_content" => $post['content'],
						"p_content_type" => "course",
						"p_comment_status" => (!empty($post['comment_status'])?1:0)
					];
					$setting_data = [
						"value" => json_encode(["price"=>$post["price"], "sale_price"=>$post['sale_price'], "passing_value"=>$post['passing_value']])
					];
					if ($this->CourseDB->update($post_data)) {
						$this->CourseDB->update_settings($id, $setting_data);
						redirect(base_url('course/update/'.$id));
					}else{
						$this->session->set_tempdata('warning', 'Something is wrong. Please try again later.');
					}
				}
			$this->load->view('template/admin/header');
			$this->load->view('course/update', $data);
			$this->load->view('template/admin/footer');
		}

		public function section($id)
		{
			$data['sections'] = $this->CourseDB->sections($id);
			$this->form_validation->set_rules('name', 'Title', 'required');
			if ($this->form_validation->run() == TRUE)
			{
				$post = $this->input->post();
				$post_data = [
					"s_name" => $post['name'],
					"s_url" => str_replace(" ","-",strtolower($post['name'])),
					"s_course_id" => $id,
					"s_order" => 0,
					"s_description" => $post['desc']
				];
				if ($result = $this->CourseDB->saveSection($post_data)) {
					redirect(base_url('course/section/'.$id));
				}else{
					$this->session->set_tempdata('warning', 'Something is wrong. Please try again later.');
				}
			}
			$this->load->view('template/admin/header');
			$this->load->view('course/section', $data);
			$this->load->view('template/admin/footer');
		}
	
		public function lesson($sid)
		{
			$data['sections'] = $this->CourseDB->sections($sid);
			$this->form_validation->set_rules('title', 'Title', 'required');
			if ($this->form_validation->run() == TRUE)
			{
				$post = $this->input->post();
				$post_data = [
					"p_title" => $post['title'],
					"p_url" => str_replace(" ","-",strtolower($post['title'])),
					"p_content" => $post['content'],
					"p_content_type" => "lesson",
					"p_content_preview" => (!empty($post['preview'])?1:0),
					"p_comment_status" => (!empty($post['comment_status'])?1:0)
				];
				$section_item_data = [
					"si_section_id" => $sid,
					"si_order" => 0,
					"si_type" => (!empty($post['stype'])?'quizze':'lesson')
				];
				if ($result = $this->CourseDB->save($post_data)) {
					$section_item_data['si_post_id'] = $result;
					$this->CourseDB->saveSectionItem($section_item_data);
					redirect(base_url('course/section/'.$sid));
				}else{
					$this->session->set_tempdata('warning', 'Something is wrong. Please try again later.');
				}
			}
			$this->load->view('template/admin/header');
			$this->load->view('course/lesson', $data);
			$this->load->view('template/admin/footer');
    }

	public function test() {
		print_r($this->CourseDB->pagination());
	}

}