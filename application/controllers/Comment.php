<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

    public function __construct() {
		parent::__construct();
		// if($this->myauthentication->check_permission()){
		// 	redirect(base_url());
		// }
		$this->load->model("CommentDB");
    }
    
    public function index()
	{
		$data['results'] = $this->CourseDB->pagination();
		$this->load->view('template/admin/header');
		$this->load->view('course/index', $data);
		$this->load->view('template/admin/footer');
    }

    public function add()
	{
        $post = $this->input->post();
        $data = [
            "c_post_id" => $post['postid'],
            "c_user_id" => $post['userid'],
            "c_content" => $post['content'],
            "c_parent" => (!empty($post['parent'])?$post['parent']:0),
            "c_approved" => 1
        ];
        $this->CommentDB->save($data);
        if($result = $this->CommentDB->findPost($post['postid'])){
            redirect(base_url($result));
        }
    }
}
