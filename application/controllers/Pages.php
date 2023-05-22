<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pages extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->helper("url");
        $this->load->library('pagination', 'session');
        $this->load->model("Pelanggan");
    }

    public function index()
    {
        $this->load->view("pages/index");
    }


    public function form()
    {
        $config['base_url'] = "http://localhost:8080/form/";
        $config['total_rows'] = $this->Pelanggan->getAll_count();
        $config['per_page'] = 4;
        $config['uri_segment'] = 2;
        $config['full_tag_open'] = '<nav aria-label="Page navigation example">';
        $config['full_tag_close'] = '</nav>';
        $config['first_tag_open'] = '<ul class="pagination">';
        $config['first_tag_close'] = '</ul>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<b>';
        $config['cur_tag_close'] = '</b>';
        // $config['use_page_numbers'] = TRUE;
        // $config['page_query_string'] = TRUE;



        $page = ($this->uri->segment(2) ? $this->uri->segment(2) :0);
        $this->pagination->initialize($config);		

        $data['data'] = $this->Pelanggan->getAll($config['per_page'],$page);

        var_dump($data);
        $this->load->view("pages/form", $data);
    }

    public function register()
    {
        $this->load->view("pages/auth/register");
    }

    public function login()
    {
        $this->load->view('pages/login');
    }

    public function dashboard()
    {
        if ($this->session->has_userdata("user")) {
            $this->load->view("pages/dashboard");
        }else{
            redirect(base_url());
        }
    }
}