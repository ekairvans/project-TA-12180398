<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required', ['required' => 'NIP tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password tidak boleh kosong']);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Login';
            $this->load->view('login', $data);
        } else {
            // jika validation berhasil
            $this->_login();
        }
    }
    private function _login()
    {
        $nip = $this->input->post('nip');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nip' => $nip])->row_array();

        if ($user) {
            // jika User Aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nip' => $user['nip'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('profile');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Anda Salah</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nip Tidak Aktif</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nip Tidak Terdaftar</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Anda Berhasil Logout</div>');
        redirect('auth');
    }
}
