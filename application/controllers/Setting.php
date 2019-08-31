<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct() {
		parent::__construct();
		if($this->myauthentication->internal_check()){
			redirect(base_url());
		}
		$this->load->model("SettingDB");
    }
    
    public function popular_course()
	{
        $this->form_validation->set_rules('popular_course[]', 'Popular Course', 'required');
        if ($this->form_validation->run() == TRUE)
        {
            $post = $this->input->post();
            $post_data['name'] = 'popular_course';
            $post_data['value'] = json_encode($post['popular_course']);

            if ($result = $this->SettingDB->updateSetting($post_data)) {
                redirect(base_url('setting/popular_course'));
            }else{
                $this->session->set_tempdata('warning', 'Something is wrong. Please try again later.');
            }
        }
        $data['popular_courses'] = $this->SettingDB->popularCourse();
        $data['courses'] = $this->SettingDB->courseList();
		$this->load->view('template/admin/header');
		$this->load->view('setting/popular_course', $data);
		$this->load->view('template/admin/footer');
    }
}
