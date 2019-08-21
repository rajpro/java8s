<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthDB extends CI_Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $this->user = 'st_users';
        $this->profile = 'st_profile';
    }

    public function check_credential($data)
    {
        $result = $this->db->get_where($this->user, ['u_email'=>$data['email']])->row_array();
        if (!empty($result)) {
            if (password_verify($data['password'], $result['u_password'])) {
                $return = ['userid'=>$result['u_id'],
                    'email'=>$result['u_email'],
                    'usertype'=>$result['u_usertype']
                ];
                return $return;
            }
        }
        return false;
    }

    public function registerStudent($users, $profile)
    {
        if($this->db->insert($this->user, $users)) {
            $profile['users_id'] = $this->db->insert_id();
            $this->db->insert($this->profile, $profile);
            return true;
        }else {
            return false;
        }
    }
}
?>