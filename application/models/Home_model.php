<?php

class Home_model extends CI_model
{
    public function tambahDataUser()
    {
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            "role_id" => 2,
            "date_created" => time(),
            "image" => 'default.jpg'
        ];

        $this->db->insert('user', $data);
    }

    public function ambillogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'email' => $row->email,
                    'password' => $row->password
                );
            }
            $this->session->get_userdata($sess);
            redirect('home');
        } else {
            $this->session->set_flashdata('info', 'Maaf email dan password anda salah!');
            redirect('home');
        }
    }
}
