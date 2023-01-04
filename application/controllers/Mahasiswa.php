<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = 'Daftar Mahasiswa';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswaByKey();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index',);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah data Mahasiswa';
        $data['jurusan'] = ['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektronika', 'Teknik Jaringan Telekomunikasi', 'Ilmu Komunikasi'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'di tambahkan');
            redirect('mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'di hapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['judul'] = $data['mahasiswa']['nama'];


        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['judul'] = 'Edit data Mahasiswa';
        $data['jurusan'] = ['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektronika', 'Teknik Jaringan Telekomunikasi', 'Ilmu Komunikasi'];
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa($id);
            $this->session->set_flashdata('flash', 'di Ubah');
            redirect('mahasiswa');
        }
    }

    // public function cari()
    // {
    //     $data['judul'] = '';
    //     $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswaByKey();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('mahasiswa/cari',);
    //     $this->load->view('templates/footer');
    // }
}
