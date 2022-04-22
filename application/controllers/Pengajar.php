<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar extends CI_Controller
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

        $this->form_validation->set_rules('judul_kelas', 'Judul Kelas', 'required', ['required' => 'Judul kelas harus diisi']);
        $this->form_validation->set_rules('id_materi', 'Materi', 'required', ['required' => 'Materi Harus diisi']);
        $this->form_validation->set_rules('pertemuan', 'Pertemuan ke', 'required', ['required' => 'Pertemuan Harus diisi']);
        $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required', ['required' => 'Jam Mulai Harus diisi']);
        $this->form_validation->set_rules('jam_selesei', 'Jam Selesei', 'required', ['required' => 'Jam Selesei Harus diisi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/index', $data);
            $this->load->view('templates/footer');
        } else {
            $user = $this->ModelUser->userGetSession();
            $data = [
                'nip_user' => $user['nip'],
                'id_materi' => $this->input->post('id_materi'),
                'judul_kelas' => $this->input->post('judul_kelas'),
                'pertemuan' => $this->input->post('pertemuan'),
                'jam_mulai' => $this->input->post('jam_mulai'),
                'jam_selesei' => $this->input->post('jam_selesei'),
                'date_create' => time()
            ];

            $this->db->insert('kelas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas baru berhasil ditambah</div>');
            redirect('pengajar');
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
    public function getByIdEdit()
    {
        $data['title'] = 'Edit Kelas';
        $id = $this->uri->segment(3);
        $data['user'] = $this->ModelUser->userGetSession();
        $data['kelas'] = $this->ModelKelas->getByIdkelas($id);
        $data['materi'] = $this->ModelKelas->getAllMateri();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/editKelas', $data);
            $this->load->view('templates/footer');
        }
    }

    public function editKelas()
    {
        $data = [
            'id_materi' => $this->input->post('id_materi'),
            'judul_kelas' => $this->input->post('judul_kelas'),
            'pertemuan' => $this->input->post('pertemuan'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesei' => $this->input->post('jam_selesei'),
        ];
        $this->db->where('id_kelas', $this->input->post('id_kelas'));
        $this->db->update('kelas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas "' . $this->input->post('judul_kelas') . '" berhasil diubah</div>');
        redirect('pengajar');
    }
    public function deleteKelas()
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_kelas', $id);
        $this->db->delete('kelas');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas telah dihapus</div>');
        redirect('pengajar');
    }

    // ruang kelas
    public function materiBelajarBaru()
    {
        $data['user'] = $this->ModelUser->userGetSession();
        $id = $this->uri->segment(3);
        $this->form_validation->set_rules('judul_kelas', 'Judul Kelas', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('file', 'File', 'required');
        $this->form_validation->set_rules('video', 'Video', 'required');



        $config['upload_path']          = './assets/doc/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 2048;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            echo $this->upload->display_errors();
        } else {
            $upload_data = $this->upload->data();
        }

        $data = [
            'id_kelas' => $this->input->post('id_kelas'),
            'description' => $this->input->post('description'),
            'file' =>  $this->upload->data('file_name'),
            'video' => $this->input->post('video'),
            'date_create' => time()
        ];
        $this->db->insert('pembelajaran', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Materi berhasil di upload</div>');
        redirect('pengajar/getByIdkelas/' . $id);
    }

    // buat tugas
    public function tugasBaru()
    {
        $data['title'] = 'Tambah Tugas';
        $data['user'] = $this->ModelUser->userGetSession();
        $id = $this->uri->segment(3);
        $id_pem = $this->uri->segment(4);
        $this->form_validation->set_rules('judul_tugas', 'Judul Tugas', 'required', ['required' => 'Judul Tugas Harus diisi']);
        $this->form_validation->set_rules('description1', 'Description', 'required', ['required' => 'Description Harus diisi']);
        $this->form_validation->set_rules('batas_waktu', 'Batas Waktu', 'required', ['required' => 'Batas Waktu Harus diisi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/tambahTugas', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path']          = './assets/doc/';
            $config['allowed_types']        = 'pdf|doc|docx';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file1')) {
                echo $this->upload->display_errors();
            } else {
                $upload_tugas = $this->upload->data('file_name');
            }

            $data = [
                'id_pem' => $id_pem,
                'id_kelas' => $id,
                'pertemuan' =>  $this->input->post('pertemuan'),
                'judul_tugas' => $this->input->post('judul_tugas'),
                'desc_tugas' => $this->input->post('description1'),
                'file' =>  $upload_tugas,
                'date_exp' => $this->input->post('batas_waktu'),
                'date_create' => time()
            ];
            $this->db->insert('tugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas berhasil di upload</div>');
            redirect('pengajar/getByIdkelas/' . $id);
        }
    }


    // nilai

    public function lihatTugas()
    {
        $data['title'] = 'Upload Tugas';
        $data['user'] = $this->ModelUser->userGetSession();
        $id = $this->uri->segment(4);
        $data['id_tugas'] = $this->ModelKelas->kirimNilai(['id_relasi' => $id])->row_array();

        $this->form_validation->set_rules('nilai', 'Nilai', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ruangkelas/lihatTugas', $data);
            $this->load->view('templates/footer');
        }
    }
    public function updateNilai()
    {
        $id_kelas = $this->uri->segment(3);

        $data = [
            'nilai' => $this->input->post('nilai'),
        ];
        $this->db->where('id_relasi', $this->input->post('id_relasi'));
        $this->db->update('relasi_tugas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Nilai Berhasil di Update</div>');
        redirect('pengajar/getByIdkelas/' . $id_kelas);
    }

    // nilai report

    public function nilaiRaport()
    {
        $data['title'] = 'Nilai Raport';
        $data['user'] = $this->ModelUser->userGetSession();
        $data['siswa'] = $this->ModelUser->getUser(['role_id' => 3])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengajar/index', $data);
        $this->load->view('templates/footer');
    }

    // excel
    public function excel()
    {
        $data['siswa'] = $this->ModelUser->getUser(['role_id' => 3])->result_array();
        $this->load->view('pengajar/excel', $data);
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
