<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['title'] = 'Ruang Kelas';
        $data['user'] = $this->ModelUser->userGetSession();
        $data['materi'] = $this->ModelKelas->getAllMateri();
        $data['kelas'] = $this->ModelKelas->getAllKelas();
        $data['absensi'] = $this->ModelKelas->getAbsensi(['nip_user' => $this->session->userdata('nip')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function getByIdkelas()
    {
        $id = $this->uri->segment(3);
        $nip = $this->session->userdata('nip');
        $data['title'] = 'Ruang Kelas';
        $data['subtitle'] = 'Rekap Absen';
        $data['user'] = $this->ModelUser->userGetSession();
        $data['kelas'] = $this->ModelKelas->getByIdkelas($id);
        $data['chat'] = $this->ModelKelas->get_chat_forum($id)->result();
        $data['pembelajaran'] = $this->ModelKelas->getAllPembelajaran(['id_kelas' => $data['kelas']['id_kelas']])->result_array();
        $data['absensi'] = $this->ModelKelas->getAbs($id, $nip);
        $data['tugas'] = $this->ModelKelas->getTugas($id);
        $data['tugasterkumpul'] = $this->ModelKelas->getTugasTerkumpul($id);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/masukKelas', $data);
            $this->load->view('templates/footer');
        }
    }

    // upload tugas
    public function kirimTugas()
    {
        $data['title'] = 'Upload Tugas';
        $data['user'] = $this->ModelUser->userGetSession();
        $nip = $this->session->userdata('nip');
        $id = $this->uri->segment(4);
        $data['relasi_tugas'] = $this->ModelKelas->getUploadTugas($id, $nip);
        $data['id_tugas'] = $this->db->get_where('relasi_tugas', ['id_relasi' => $id])->row_array();
        $this->form_validation->set_rules('judul_tugas', 'Judul Tugas', 'required');
        $this->form_validation->set_rules('description1', 'Description', 'required');
        $this->form_validation->set_rules('file1', 'File', 'required');
        $this->form_validation->set_rules('batas_waktu', 'Batas Waktu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/uploadTugas', $data);
            $this->load->view('templates/footer');
        }
    }
    public function uploadTugas()
    {
        $id = $this->uri->segment(4);
        $id_kelas = $this->uri->segment(3);
        $data['user'] = $this->ModelUser->userGetSession();

        $config['upload_path']          = './assets/doc/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 2048;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('ruangkelas/masukKelas/', $error);
        } else {
            $upload_tugas = $this->upload->data('file_name');
        }

        $data = [
            'nip' => $this->session->userdata('nip'),
            'id_tugas' => $id,
            'nilai' => '',
            'relasi_create' => $this->input->post('date'),
            'relasi_update' => '',
            'file_tugas' => $upload_tugas
        ];
        $this->db->insert('relasi_tugas', $data);



        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas berhasil diupload</div>');
        redirect('siswa/getByIdkelas/' . $id_kelas);
    }

    public function editUploadTugas()
    {
        $id_kelas = $this->uri->segment(3);

        $config['upload_path']          = './assets/doc/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 2048;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file1')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('ruangkelas/masukKelas/', $error);
        } else {
            $upload_tugas = $this->upload->data('file_name');
        }

        $data = [
            'relasi_update' => $this->input->post('dateupdate'),
            'file_tugas' => $upload_tugas
        ];
        $this->db->where('id_relasi', $this->input->post('id_relasi'));
        $this->db->update('relasi_tugas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas berhasil diupload</div>');
        redirect('siswa/getByIdkelas/' . $id_kelas);
    }


    // absensi
    public function absensi()
    {
        $data['user'] = $this->ModelUser->userGetSession();
        $id = $this->uri->segment(3);
        date_default_timezone_set("Asia/Jakarta");


        $this->form_validation->set_rules('user', 'Pengajar', 'required');
        $this->form_validation->set_rules('pengajar', 'Pengajar', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('materi', 'Materi', 'required');
        $this->form_validation->set_rules('jam_kelas', 'Judul Kelas', 'required');
        $this->form_validation->set_rules('Pertemuan', 'Pertemuan', 'required');

        $data = [
            'id_kelas' => $this->input->post('id_kelas'),
            'nip_user' => $this->input->post('nip_user'),
            'status' => 1,
            'pengajar' => $this->input->post('pengajar'),
            'tanggal' => time(),
            'materi' => $this->input->post('materi'),
            'judul_kelas' => $this->input->post('judul_kelas'),
            'pertemuan' => $this->input->post('pertemuan'),

        ];

        $this->db->insert('absensi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Absen</div>');
        redirect('siswa/getByIdkelas/' . $id);
    }



    // rekap absen
    public function rekapAbsen()
    {
        $data['title'] = 'Rekap Absen';
        $data['user'] = $this->ModelUser->userGetSession();
        $data['absensi'] = $this->ModelKelas->getAbsensi(['nip_user' => $this->session->userdata('nip')])->result_array();


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/rekapAbsen', $data);
            $this->load->view('templates/footer');
        }
    }

    // chat

    public function forumDiskusi()
    {
        $data['title'] = 'Forum Diskusi';
        $id = $this->uri->segment(3);
        $data['user'] = $this->ModelUser->userGetSession();
        $data['kelas'] = $this->ModelKelas->getByIdkelas($id);
        $data['chat'] = $this->ModelKelas->get_chat_forum($id)->result();
        $data['allabsen'] = $this->ModelKelas->get_absen($id)->result();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerchat', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/forum', $data);
            $this->load->view('templates/footer');
        }
    }
    function get_chat_forum()
    {
        $id = $this->uri->segment(3);
        $data = $this->Mod_ruang->get_chat_forum($id)->result();
        echo json_encode($data);
    }
    function kirim_pesan()
    {
        $data['user'] = $this->ModelUser->userGetSession();
        $id_kelas = $this->input->post('id_kelas');
        $pesan = $this->input->post('pesan');
        $user_id = $data['user']['id'];
        $user = $data['user']['name'];
        $photo = $data['user']['image'];

        $data = array(
            'id_user' => $user_id,
            'id_kelas' => $id_kelas,
            'name' => $user,
            'pesan' => $pesan,
            'photo' => $photo,
            'date_create'   => date('Y-m-d H:i:s'),
        );
        $this->db->insert('chat_forum', $data);
        echo json_encode(1);
    }
}
