<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDB extends CI_Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $this->post = 'st_post';
        $this->section_item = 'st_section_item';
        $this->setting = 'st_setting';
    }

    public function courses() {
        $this->db->select("p_id as id, p_title as title, p_url as url");
        return $this->db->get_where($this->post, ['p_status'=>1, 'p_content_type'=>'course'])->result_array();
    }

    public function course_detail($url) {
        $this->db->select("p_id, p_title, p_url, p_content, (SELECT COUNT(si_id) FROM st_section_item WHERE si_post_id=st_post.p_id) as lesson_count");
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
}
?>