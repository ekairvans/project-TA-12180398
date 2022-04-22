<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMenu extends CI_Model
{

    public function getSession()
    {
        return
            $this->db->get_where('user', ['nip' =>
            $this->session->userdata('nip')])->row_array();
    }

    public function getAllMenu()
    {
        return $this->db->get('menu')->result_array();
    }

    public function addMenu()
    {
        return $this->db->insert('menu', ['menu' => $this->input->post('menu')]);
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu');
        return true;
    }
    public function getById($id)
    {
        return $this->db->get_where('menu', ['id' => $id])->row_array();
    }

    function updateMenu()
    {
        $data = [
            'menu' => $this->input->post('menu'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('menu', $data);
    }
}
