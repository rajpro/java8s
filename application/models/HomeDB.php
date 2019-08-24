<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDB extends CI_Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $this->post = 'st_post';
        $this->section_item = 'st_section_item';
        $this->setting = 'st_setting';
        $this->comment = 'st_comment';
        $this->profile = 'st_profile';
    }

    public function courses() {
        $this->db->select("p_id as id, p_title as title, p_url as url");
        return $this->db->get_where($this->post, ['p_status'=>1, 'p_content_type'=>'course'])->result_array();
    }

    public function list_all_course_detail() {
        $this->db->select("p_id, p_title, p_url, p_excerpt_content");
        return $this->db->get_where($this->post, ['p_status'=>1, 'p_content_type'=>'course'])->result_array();
    }

    public function lesson_detail($url) {
        return $this->db->get_where($this->post, ['p_url'=>$url])->row_array();
    }

    public function course_detail($url) {
        $this->db->select("p_id, p_title, p_url, p_content, (SELECT COUNT(si_id) FROM st_section_item WHERE si_post_id IN (SELECT s_id FROM st_section WHERE s_course_id=st_post.p_id)) as lesson_count, (SELECT value FROM st_setting WHERE name='post_setting' AND referral=st_post.p_id) as setting");
        return $this->db->get_where($this->post, ['p_url'=>$url])->row_array();
    }

    public function course_lessons($url) {
        $this->db->select('st_section.s_id, st_section.s_name, st_section.s_description');
        $this->db->where('st_post.p_url', $url);
        $this->db->from('st_post');
        $this->db->join('st_section', 'st_section.s_course_id = st_post.p_id');
        $query = $this->db->get()->result_array();
        if(!empty($query)) {
            foreach($query as $key => $q) {
                $this->db->select('st_post.p_id, st_post.p_title, st_post.p_url');
                $this->db->where('st_section_item.si_section_id', $q['s_id']);
                $this->db->from('st_section_item');
                $this->db->join('st_post', 'st_post.p_id = st_section_item.si_post_id');
                $query[$key]['s_lession'] = $this->db->get()->result_array();
            }
        }
        return $query;
    }

    public function comments($url) {
        $post = $this->db->get_where($this->post, ['p_url'=>$url])->row_array();
        $comments = $this->db->get_where($this->comment, ['c_post_id'=>$post['p_id'], 'c_parent'=>0])->result_array();
        $comments = $this->_comments($comments);
        foreach($comments as $key => $value) {
            $comments[$key]['parent'] = $this->_comments($value['parent']);
        }
        return $comments;
    }

    protected function _comments($comments) {
        foreach($comments as $key => $value) {
            $comments[$key]['user_profile'] = $this->db->get_where($this->profile, ['users_id'=>$value['c_user_id']])->row_array();
            $comments[$key]['parent'] = $this->db->get_where($this->comment, ['c_parent'=>$value['c_id']])->result_array();
        }
        return $comments;
    }
}
?>