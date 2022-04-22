<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->ModelMenu->getSession();
        $data['edit_menu'] = $this->db->get_where('menu', ['menu' => $this->session->userdata('menu')])->row_array();
        $data['menu'] = $this->ModelMenu->getAllMenu();
        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->ModelMenu->addMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru berhasil ditambah</div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->ModelMenu->deleteMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus</div>');
        redirect('menu');
    }


    public function getById($id)
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->ModelMenu->getSession();
        $data['menu'] = $this->ModelMenu->getById($id);

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editMenu', $data);
            $this->load->view('templates/footer');
        }
    }

    public function updateMenu()
    {
        $this->ModelMenu->updateMenu();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil diubah</div>');
        redirect('menu');
    }

    // End Menu

    public function submenu()
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->ModelMenu->getSession();
        $data['menu'] = $this->ModelMenu->getAllMenu();
        $data['submenu'] = $this->ModelSubMenu->getSubMenu();
        $this->form_validation->set_rules('title', 'Title', 'required', ['required' => 'Title Belum diisi']);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required', ['required' => 'Menu Belum diisi']);
        $this->form_validation->set_rules('url', 'URL', 'required', ['required' => 'Url Belum diisi']);
        $this->form_validation->set_rules('icon', 'Icon', 'required', ['required' => 'Icon Belum diisi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu berhasil ditambah</div>');
            redirect('menu/submenu');
        }
    }

    public function deleteSubMenu($id)
    {
        $this->ModelSubMenu->deleteSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu berhasil dihapus</div>');
        redirect('menu/submenu');
    }

    public function getByIdsubmenu($id)
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->ModelSubMenu->getSession();
        $data['menu'] = $this->ModelMenu->getAllMenu();
        $data['submenu'] = $this->ModelSubMenu->getSubMenu();
        $data['submenu'] = $this->ModelSubMenu->getById($id);
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editsubmenu', $data);
            $this->load->view('templates/footer');
        }
    }

    public function updateSubMenu()
    {
        $this->ModelSubMenu->updateSubMenu();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu berhasil diubah</div>');
        redirect('menu/submenu');
    }
}
