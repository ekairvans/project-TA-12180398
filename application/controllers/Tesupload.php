<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tesupload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('tesupload', ['error' => '']);
    }

    public function tesupload()
    {
        $config['upload_path']          = './assets/doc/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 2048;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('tesupload', $error);
        } else {
            $upload_data = $this->upload->data();
            print_r($upload_data);
        }
    }

    public function upup()
    {
        if ($this->input->post('image') == $_FILES) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data();
                print_r($new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 2048;
        $config['upload_path']          = './assets/doc/';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('ijasah')) {
            $upload_ijasah = $this->upload->data();
            print_r($upload_ijasah);
        } else {
            echo $this->upload->display_errors();
        }

        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 2048;
        $config['upload_path']          = './assets/doc/';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('kartu_keluarga')) {
            $upload_kartu_keluarga = $this->upload->data();
            print_r($upload_kartu_keluarga);
        } else {
            echo $this->upload->display_errors();
        }
    }
}
