<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required', ['required' => 'Nama Harus diisi']);
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', ['valid_email' => 'Email tidak terdaftar', 'required' => 'Email Harus diisi', 'is_unique' => 'Email Sudah Terdaftar']);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir Harus diisi']);
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', ['required' => 'Alamat Harus diisi']);
        $this->form_validation->set_rules('no_telp', 'Nomor telpon', 'required', ['required' => 'Nomor Telphone Harus diisi']);
        // $this->form_validation->set_rules('ijasah', 'Ijasah', 'required', ['required' => 'Wajib Melampirkan Ijasah']);
        // $this->form_validation->set_rules('kartu_keluarga', 'Kartu Keluarga', 'required', ['required' => 'Wajib Melampirkan Kartu Keluarga']);
        // $this->form_validation->set_rules('image', 'Foto', 'required', ['required' => 'Harus Meng-upload Foto']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Pendaftaran';
            $this->load->view('auth/pendaftaran', $data);
        } else {
            $this->load->library('upload');
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']     = 2048;
            $config['upload_path'] = './assets/img/profile/';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo $this->upload->display_errors();
            } else {
                $new_image = $this->upload->data('file_name');
            }
            unset($config);
            $config['upload_path']          = './assets/doc/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('ijasah')) {
                echo $this->upload->display_errors();
            } else {
                $upload_ijasah = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('kartu_keluarga')) {
                echo $this->upload->display_errors();
            } else {
                $upload_kartu_keluarga = $this->upload->data('file_name');
            }

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'alamat' => $this->input->post('alamat', true),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telp' => $this->input->post('no_telp', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'image' => $new_image,
                'ijasah' => $upload_ijasah,
                'krt_keluarga' => $upload_kartu_keluarga,
                'is_active' => 0,
                'date_created' => time()
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'token' => $token,
                'date_created' => time()

            ];
            $this->db->insert('user_token', $user_token);
            $this->db->insert('pendaftar', $data);
            $this->_sendEmail2($token, 'verify');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda Berhasil Daftar, Cek Email Anda Untuk Verifikasi Email</div>');
            redirect('pendaftaran/verifikasiemail');
        }
    }
    public function berhasil()
    {
        $data['title'] = 'Daftar Berhasil';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/berhasildaftar');
    }

    public function verifikasiemail()
    {
        $data['title'] = 'Verifikasi Email';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/verifikasiemail');
    }

    public function listPendaftar()
    {
        $data['title'] = 'Pendaftar';
        $data['user'] = $this->ModelProfile->userGetSession();
        $data['pendaftar'] = $this->ModelUser->getPendaftar(['is_active' => 1])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('auth/listpendaftar', $data);
        $this->load->view('templates/footer');
    }

    public function getById()
    {
        $id = $this->uri->segment(3);
        $data['title'] = 'Detail Pendaftar';
        $data['user'] = $this->ModelProfile->userGetSession();
        $data['pendaftar'] = $this->ModelUser->getByIdpendaftar($id);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('auth/detailPendaftar', $data);
            $this->load->view('templates/footer');
        }
    }


    public function diterima()
    {
        $data = [
            'role_id' => 3,
            'name' => htmlspecialchars($this->input->post('name', true)),
            'nip' => $this->input->post('nip', true),
            'alamat' => $this->input->post('alamat', true),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'no_telp' => $this->input->post('no_telp', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'image' => $this->input->post('image', true),
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'is_active' => 1,
            'date_created' => time(),
        ];

        $doc_user = [
            'nip_user' => $this->input->post('nip', true),
            'ijasah' => $this->input->post('ijasah', true),
            'krt_keluarga' => $this->input->post('krt_keluarga', true)
        ];


        $this->db->insert('doc_user', $doc_user);
        $this->db->insert('user', $data);

        $id = $this->uri->segment(3);
        $this->ModelProfile->tolak($id);
        $this->_sendEmail('diterima');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftar Telah Diterima</div>');
        redirect('pendaftaran/listPendaftar');
    }
    private function _sendEmail($type)
    {


        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'studiokelas@gmail.com',
            'smtp_pass' => 'studiokelas123456',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('studiokelas@gmail.com', 'Studio Kelas');
        $this->email->to($this->input->post('email', true));

        if ($type == 'diterima') {
            $pesan = '<html><body>';
            $pesan .= '<h1>Selamat Anda Berhasil Menjadi Peserta Didik di Studio Kelas</h1>
                                    <h4>Silahkan login menggunakan</h4>
                                    <p>NIP : ' . $this->input->post('nip', true) . '</p>
                                    <p>Password : 123456</p>
                                    <a href="' . base_url() . 'auth/login">Login</a>
                        ';
            $pesan .= '</body></html>';
            $pesan = wordwrap($pesan, 70);
            $this->email->subject('Selamat Anda Berhasil Diterima Studio Kelas ');
            $this->email->message($pesan);
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    private function _sendEmail2($token, $type)
    {


        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'studiokelas@gmail.com',
            'smtp_pass' => 'studiokelas123456',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('studiokelas@gmail.com', 'Studio Kelas');
        $this->email->to($this->input->post('email', true));


        if ($type == 'verify') {
            $this->email->subject('Verifikasi Email');
            $this->email->message('Klik link untuk verifikasi : <a href="' . base_url() . 'pendaftaran/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->db->get_where('pendaftar', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('pendaftar');
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> ' . $email . ' Pendaftaran berhasil, Tunggu informasi selanjutnya melalui email anda</div>');
                    redirect('pendaftaran/berhasil');
                } else {
                    $this->db->delete('pendaftar', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi melewati batas waktu, silahkan daftar kembali.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Token</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Aktivasi! email salah!</div>');
            redirect('auth');
        }
    }

    public function ditolak()
    {
        $id = $this->uri->segment(3);
        $this->ModelProfile->tolak($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftar Telah Ditolak</div>');
        redirect('pendaftaran/listPendaftar');
    }
}
