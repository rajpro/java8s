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
        $this->db->select("p_id, p_title, p_content, p_excerpt_content, p_content_preview, p_comment_status, p_status");
        return $this->db->get_where($this->post, ['p_id'=>$id])->row_array();
    }

    public function pagination() {
        return $this->db->query("SELECT p_id, p_title, p_comment_count, p_modified_date, p_status, (SELECT value FROM st_setting WHERE name='post_setting' AND referral=st_post.p_id) AS p_setting FROM st_post WHERE p_content_type='lesson'")->result_array();
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

    public function delete($id) {
        return $this->db->where('p_id', $id)->delete($this->post);
    }

}
?>