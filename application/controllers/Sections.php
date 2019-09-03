<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends CI_Controller {

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
			$this->load->view('lesson/create');
			$this->load->view('template/admin/footer');
		}

		public function update($id)
		{
			$data['model'] = $this->LessonDB->findById($id);
			$this->form_validation->set_rules('title', 'Title', 'required');
				if ($this->form_validation->run() == TRUE)
				{
					$post = $this->input->post();
					$post_data = [
						"p_id" => $id,
						"p_title" => $post['title'],
						"p_url" => str_replace(" ","-",strtolower($post['title'])),
						"p_content" => $post['content'],
						"p_comment_status" => (!empty($post['comment_status'])?1:0),
						"p_content_preview" => (!empty($post['preview'])?1:0),
					];
					if ($this->LessonDB->update($post_data)) {
						redirect(base_url('sections/update/'.$id));
					}else{
						$this->session->set_tempdata('warning', 'Something is wrong. Please try again later.');
					}
				}
			$this->load->view('template/admin/header');
			$this->load->view('lesson/update', $data);
			$this->load->view('template/admin/footer');
		}

		public function delete($id) {
			$this->LessonDB->delete($id);
			redirect(base_url('sections'));
		}
}