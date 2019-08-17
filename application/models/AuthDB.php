<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthDB extends CI_Model {

    public $result;

    public function __construct() {
        parent::__construct();
        $this->user = 'st_users';
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
}
?>