<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CourseDB extends CI_Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $this->post = 'st_post';
        $this->setting = 'st_setting';
    }

    public function pagination() {
        return $this->db->query("SELECT p_id, p_title, p_comment_count, p_modified_date, p_status, (SELECT COUNT(s_id) FROM st_section WHERE s_course_id=st_post.p_id) AS p_section_count, (SELECT COUNT(si_id) FROM st_section_item WHERE si_post_id=st_post.p_id) AS p_section_item_count, (SELECT value FROM st_setting WHERE referral=st_post.p_id) AS p_setting FROM st_post")->result_array();
    }

    public function save($data) {
        if($this->db->insert($this->post, $data)) {
            return $this->db->insert_id();
        }else {
            return false;
        }
    }

    public function save_settings($data) {
        return $this->db->insert($this->setting, $data);
    }
}
?>