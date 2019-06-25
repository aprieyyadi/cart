<?php

class Regis_model extends CI_model
{
    public function tambahDataUser()
    {
        $data= [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->insert('user',$data);
    }
}