<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LessonDB extends CI_Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $this->post = 'st_post';
        $this->section = 'st_section';
        $this->section_item = 'st_section_item';
        $this->setting = 'st_setting';
    }

    public function findById($id) {
        $this->db->select("p_id, p_title, p_content, p_excerpt_content, p_content_preview, p_comment_status, p_status, (SELECT value FROM st_setting WHERE name='post_setting' AND referral=st_post.p_id) as p_setting");
        return $this->db->get_where($this->post, ['p_id'=>$id])->row_array();
    }

    public function pagination() {
        return $this->db->query("SELECT p_id, p_title, p_comment_count, p_modified_date, p_status, (SELECT COUNT(s_id) FROM st_section WHERE s_course_id=st_post.p_id) AS p_section_count, (SELECT COUNT(si_id) FROM st_section_item WHERE si_post_id=st_post.p_id) AS p_section_item_count, (SELECT value FROM st_setting WHERE referral=st_post.p_id) AS p_setting FROM st_post WHERE p_content_type='course'")->result_array();
    }

    public function save($data) {
        if($this->db->insert($this->post, $data)) {
            return $this->db->insert_id();
        }else {
            return false;
        }
    }

    public function update($data) {
        $this->db->where('p_id', $data['p_id']);
        return $this->db->update($this->post, $data);
    }

    public function update_settings($pid, $data) {
        $this->db->where('referral', $pid);
        $this->db->where('name', 'post_setting');
        return $this->db->update($this->setting, $data);
    }

    public function saveSection($data) {
        return $this->db->insert($this->section, $data);
    }

    public function saveSectionItem($data) {
        return $this->db->insert($this->section_item, $data);
    }

    public function sections($id) {
        $this->db->select("s_id, s_name, s_description, (SELECT COUNT(si_id) FROM st_section_item WHERE si_section_id=st_section.s_id) as lessons ");
        return $this->db->get_where($this->section, ['s_course_id'=>$id])->result_array();
    }

    public function save_settings($data) {
        return $this->db->insert($this->setting, $data);
    }
}
?>