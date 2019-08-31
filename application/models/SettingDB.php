<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingDB extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->post = 'st_post';
        $this->setting = 'st_setting';
    }

    public function popularCourse() {
        $result = $this->db->get_where($this->setting, ['name'=>'popular_course'])->row_array();
        $result = (array)json_decode($result['value']);
        return $result;
    }

    public function courseList() {
        $this->db->select("p_id, p_title");
        $results = $this->db->get_where($this->post, ['p_status'=>1, 'p_content_type'=>'course'])->result_array();
        foreach ($results as $result) {
            $value[$result['p_id']] = $result['p_title'];
        }
        return $value;
    }

    public function updateSetting($data) {
        $this->db->where('name', $data['name']);
        return $this->db->update($this->setting, $data);
    }

}
?>