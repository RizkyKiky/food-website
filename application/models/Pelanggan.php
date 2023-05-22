<?php

class Pelanggan extends CI_Model{
    public function __construct() {
        parent::__construct();

        $this->load->database();
    }


    public function getAll($num, $off)
    {
        $this->db->limit($num, $off);
        $query = $this->db->get("datapelanggan");

        return $query->result();
    }

    public function getAll_count()
    {
        return $this->db->get("datapelanggan")->num_rows();
    }
}