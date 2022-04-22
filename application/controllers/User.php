<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Pengajar';
        $data['user'] = $this->ModelProfile->userGetSession();
        $data['pengajar'] = $this->ModelUser->getUser(['role_id' => 2])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahUser()
    {
        $data['title'] = 'Tambah User';
        $data['user'] = $this->ModelProfile->userGetSession();
        $data['level'] = $this->ModelUser->getAllRole();

        $this->form_validation->set_rules('nip', 'NIP', 'required', ['required' => 'NIP Belum diisi']);
        $this->form_validation->set_rules('role_id', 'Level User', 'required', ['required' => 'Level User Belum diisi']);
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required', ['required' => 'Nama Belum diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', ['required' => 'Alamat Belum diisi']);
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', ['valid_email' => 'Email tidak terdaftar', 'required' => 'Email belum diisi', 'is_unique' => 'Email Sudah Terdaftar']);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambahUser', $data);
            $this->load->view('templates/footer');
        } else {
            $this->ModelUser->tambahUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User baru berhasil ditambah</div>');
            redirect('user/tambahUser');
        }
    }

    public function deletePengajar($id)
    {
        $this->ModelUser->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
        redirect('user');
    }

    public function getByIdpengajar($id)
    {
        $data['title'] = 'Pengajar';
        $data['user'] = $this->ModelProfile->userGetSession();
        $data['pengajar'] = $this->ModelUser->getAllUser();
        $data['pengajar'] = $this->ModelUser->getById($id);

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required', ['required' => 'Nama Belum diisi']);
        $this->form_validation->set_rules('nip', 'NIP', 'required', ['required' => 'NIP Belum diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', ['required' => 'Alamat Belum diisi']);
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', ['valid_email' => 'Email tidak terdaftar', 'required' => 'Email belum diisi', 'is_unique' => 'Email Sudah Terdaftar']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editPengajar', $data);
            $this->load->view('templates/footer');
        }
    }

    public function editPengajar()
    {
        $this->ModelUser->editUser();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
        redirect('user');
    }

    public function siswa()
    {
        $data['title'] = 'Siswa';
        $data['user'] = $this->ModelProfile->userGetSession();
        $data['siswa'] = $this->ModelUser->getUser(['role_id' => 3])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/siswa', $data);
        $this->load->view('templates/footer');
    }

    public function deleteSiswa($id)
    {
        $this->ModelUser->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
        redirect('user/siswa');
    }

    public function getByIdSiswa($id)
    {
        $data['title'] = 'Pengajar';
        $data['user'] = $this->ModelProfile->userGetSession();
        $data['pengajar'] = $this->ModelUser->getAllUser();
        $data['pengajar'] = $this->ModelUser->getById($id);

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required', ['required' => 'Nama Belum diisi']);
        $this->form_validation->set_rules('nip', 'NIP', 'required', ['required' => 'NIP Belum diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', ['required' => 'Alamat Belum diisi']);
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', ['valid_email' => 'Email tidak terdaftar', 'required' => 'Email belum diisi', 'is_unique' => 'Email Sudah Terdaftar']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editSiswa', $data);
            $this->load->view('templates/footer');
        }
    }

    public function editSiswa()
    {
        $this->ModelUser->editUser();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
        redirect('user/siswa');
    }
}
