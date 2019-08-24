<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentDB extends CI_Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $this->comment = 'st_comment';
        $this->post = 'st_post';
    }

    public function findPost($id) {
        $result = $this->db->get_where($this->post, ['p_id'=>$id])->row_array();
        if($result['p_content_type']=='course') {
            return 'course-detail/'.$result['p_url'];
        }else {
            return 'lesson/'.$result['p_url'];
        }
    }

    public function findById($id) {
        $this->db->select("p_id, p_title, p_content, p_excerpt_content, p_content_preview, p_comment_status, p_status, (SELECT value FROM st_setting WHERE name='post_setting' AND referral=st_post.p_id) as p_setting");
        return $this->db->get_where($this->post, ['p_id'=>$id])->row_array();
    }

    public function pagination() {
        return $this->db->query("SELECT p_id, p_title, p_comment_count, p_modified_date, p_status, (SELECT COUNT(s_id) FROM st_section WHERE s_course_id=st_post.p_id) AS p_section_count, (SELECT COUNT(si_id) FROM st_section_item WHERE si_post_id=st_post.p_id) AS p_section_item_count, (SELECT value FROM st_setting WHERE referral=st_post.p_id) AS p_setting FROM st_post WHERE p_content_type='course'")->result_array();
    }

    public function save($data) {
        return $this->db->insert($this->comment, $data);
        
    }

    public function update($data) {
        $this->db->where('p_id', $data['p_id']);
        return $this->db->update($this->post, $data);
    }
}
?>