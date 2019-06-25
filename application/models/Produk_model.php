<?php

class Produk_model extends CI_model
{
    public function tambahOrder()
    {
        $query = "SELECT `jualan`.`nama`,`harga`, `order`.`jumlah`
                  FROM `jualan` JOIN `order`
                  ON `jualan`.`id` = `order`.`no_order`
            ";
        $total_harga = $this->input->post('jumlah') * $query['harga'];

        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "notelp" => $this->input->post('notelp', true),
            "jenis_pesanan" => $this->input->post('jenis_pesanan', true),
            "jumlah" => $this->input->post('jumlah', true),
            "total_harga" => $total_harga,
            "alamat" => $this->input->post('alamat', true),
            "tgl_kirim" => $this->input->post('tgl_kirim', true),
            "status" => 1

        ];

        $this->db->insert('order', $data);
    }
}
