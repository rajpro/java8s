<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AuthDB');
    }

	public function login()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[150]');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
        if ($this->form_validation->run() == TRUE)
        {
            $post = $this->input->post();
            if($result = $this->AuthDB->check_credential($post)) {
                $data = array_merge(['logged_in'=>'TRUE'], $result);
                $this->session->set_userdata($data);
                redirect(base_url('dashboard'));
            }else {
                $this->session->set_tempdata('item', 'value');
            }
        }
		$this->load->view('auth/login');
    }
    
    public function register()
	{
        // echo password_hash("1234", PASSWORD_BCRYPT, ['cost'=>'12']);
		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
    }

    public function logout()
	{
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }
    
    public function forgot_password()
	{
		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
    }
    
    public function email_verification()
	{
		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}

}
