<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Admin_model');
        $this->load->model('cart_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Produk';
        $data['data']=$this->cart_model->get_all_produk();
        $data['jualan'] = $this->Admin_model->getAllJualan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_home');
        $this->load->view('templates/topbar_', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $data['judul'] = 'Halaman Produk';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_home');
        $this->load->view('templates/topbar_');
        $this->load->view('home/about');
        $this->load->view('templates/footer');
    }


    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Page';
            $this->load->view('templates/header', $data);
            $this->load->view('home/login');
            $this->load->view('templates/footer');
        } else {
            // validasinya success
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">
                    Wrong password!
                </div>');
                    redirect('home/login');
                }
            } else {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">
            Email is not registered!
          </div>');
                redirect('home/login');
            }
        }
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password Tidak Cocok!',
            'min_length' => 'Password Terlalu Pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('home/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Home_model->tambahDataUser();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Selamat, akun anda telah dibuat. Silahkan Login
            </div>');
            redirect('home/login');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!
          </div>');
        redirect('home');
    }

 
}
