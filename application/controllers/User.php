<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Produk';
        $data['jualan'] = $this->Admin_model->getAllJualan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function pesananku($id)
    {
        $data['judul'] = 'Halaman Produk';
        $data['jualan'] = $this->Admin_model->getOrderById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pesananku', $data);
        $this->load->view('templates/footer');
    }
}
