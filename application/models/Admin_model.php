<?php

class Admin_model extends CI_model
{
    public function getALlOrder()
    {
        return $this->db->get('order')->result_array();
    }

    public function getOrderById($id)
    {
        return $this->db->get_where('order', ['no_order' => $id])->row_array();
    }

    public function getMyOrder($id)
    {
        $query = "SELECT `user`.*,`order`.`id`
        FROM `user` JOIN `order`
        ON `user`.`id` = `order`.`id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function hapusDataOrder($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('order', ['no_order' => $id]);
    }

    public function hapusProduk($id)
    {
        $this->db->delete('jualan', ['id' => $id]);
    }

    public function getAllJualan()
    {
        return $this->db->get('jualan')->result_array();
    }

    public function getOrder()
    {
        $query = "SELECT `order`.*, `status`.*
                    FROM `order` INNER JOIN `status`
                    ON `order`.`status` = `status`.`id`
        
        ";

        return $this->db->query($query)->result_array();
    }

    public function tambahJajanan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $this->input->post('img', true),
            "deskripsi" => $this->input->post('desc', true)
        ];

        $this->db->insert('jualan', $data);
    }

    public function invoice()
    {
        $query = "SELECT `order`.*, `jualan`.*
                    FROM `order` INNER JOIN `jualan`
                    ON `order`.`id` = `jualan`.`id`
        
        ";

        return $this->db->query($query)->result_array();
    }
}
