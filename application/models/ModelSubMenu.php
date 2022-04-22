<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSubMenu extends CI_Model
{
    public function getSession()
    {
        return
            $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    }

    public function getSubMenu()
    {
        $query = "SELECT `sub_menu`.*, `menu`.`menu`
                    FROM `sub_menu` JOIN `menu`
                    ON `sub_menu`.`menu_id` = `menu`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }

    public function deleteSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sub_menu');
        return true;
    }
    public function getById($id)
    {
        return $this->db->get_where('sub_menu', ['id' => $id])->row_array();
    }

    function updateSubMenu()
    {
        $data = [
            'menu_id' => $this->input->post('menu_id'),
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('sub_menu', $data);
    }
}
