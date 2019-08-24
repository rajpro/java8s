<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myauthentication {

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
    }

    public function check_permission() {
        if (!empty($this->CI->session->userdata['logged_in']) && $this->CI->session->userdata['logged_in'] == TRUE) {
            return true;
        }
        return false;
    }

    public function internal_check() {
        if(!empty($this->CI->session->userdata['usertype']) && $this->CI->session->userdata['usertype']!='student') {
            return false;
        }else{
            return true;
        }
    }
}