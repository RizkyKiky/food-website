<?php

class User extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function checkUser($user)
    {
        $this->db->where('user', $user);
        $query = $this->db->get("user");

        if ($query->num_rows() >= 1) {
            return TRUE;
        } else {
            return FALSE;
        }
        
        
    }

    public function checkLogin()
    {
        $this->db->where("user", $this->input->post('user'));
        $this->db->where("password", sha1($this->input->post("password")));

        $query = $this->db->get("user");

        if($query->num_rows() == 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function register()
    {
        $data = [
            "user" => $this->input->post("user"),
            "no_hp" => $this->input->post("no_hp"),
            "nama_lengkap" => $this->input->post("nama_lengkap"),
            "password" => sha1($this->input->post("password")),
        ];

        $this->db->insert("user", $data);   
        
    }
}