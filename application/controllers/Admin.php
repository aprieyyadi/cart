<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['judul'] = 'Halaman Admin';
        $data['jualan'] = $this->Admin_model->getAllJualan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function produk()
    {
        $data['judul'] = 'Daftar Produk';
        $data['jualan'] = $this->Admin_model->getAllJualan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('img', 'Gambar');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('desc', 'Harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/produk', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->tambahJajanan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/produk');
        }
    }


    public function order()
    {
        $data['judul'] = 'Halaman Order';
        $data['order'] = $this->Admin_model->getOrder();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/order', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $this->Admin_model->hapusDataOrder($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/order');
    }

    public function hapusproduk($id)
    {
        $this->Admin_model->hapusProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/produk');
    }


    public function tambahproduk()
    {
        $data['judul'] = 'Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('img', 'Gambar');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('desc', 'Harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/produk', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->tambahJajanan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('produk');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!
          </div>');
        redirect('home/login');
    }
}
