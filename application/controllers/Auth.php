<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Hope CTC';
        $this->load->view('templates/beranda/header', $data);
        $this->load->view('templates/modal/modal');
        $this->load->view('auth/beranda');
        $this->load->view('templates/beranda/footer');
    }

    public function login()
    {
        $data['title'] = 'Form Login';
        $this->load->view('login', $data);
    }

    public function blocked()
    {
        $data['title'] = 'EROR';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/blocked');
    }
}
