<?php

class Auth extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('User');
        $this->load->helper('url');
    }

    
    public function login() {
        if ($this->User->checkLogin()) {
            
            $this->session->set_userdata("user", $this->input->post("user"));
            redirect("dashboard");
        }else{
            $this->session->set_flashdata("error_login", "failed to login please try again");
            redirect("login");
        }  
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect();
    }
    

    public function registerAdd()
    {
        if (!$this->User->checkUser($this->input->post('user'))) {
            $this->session->set_flashdata('message', "succes on register");
            
            $this->User->register();

            redirect(base_url() . "register");
        } else {
            $this->session->set_flashdata('error', "Username Already Exist, please try again.");
            
            redirect(base_url() . "register");
        }
        
    }
}