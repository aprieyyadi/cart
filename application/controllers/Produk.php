<?php

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Produk';
        $data['jualan'] = $this->Admin_model->getAllJualan();

        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }

    public function order()
    {
        $data['judul'] = 'Halaman Pemesanan';
        $data['jualan'] = $this->Admin_model->getAllJualan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('notelp', 'Notelp', 'required');
        $this->form_validation->set_rules('jenis_pesanan', 'Jenis_pesanan', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tgl_kirim', 'Tanggal kirim', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('produk/order', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Produk_model->tambahOrder();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('produk');
        }
    }
}
