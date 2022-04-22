<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function userGetSession()
    {
        return
            $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
    }
    public function getUser($where = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getPendaftar($where = null)
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahUser()
    {
        $data = [
            'role_id' => $this->input->post('role_id', true),
            'name' => htmlspecialchars($this->input->post('name', true)),
            'nip' => $this->input->post('nip', true),
            'alamat' => $this->input->post('alamat', true),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.jpg',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        return true;
    }

    public function getById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function editUser()
    {
        $data = [
            'nip' => $this->input->post('nip', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'is_active' => 1,
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function editSiswa()
    {
        $data = [
            'nip' => $this->input->post('nip', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'is_active' => 1,
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }



    public function getLevelUser()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                    FROM `user` JOIN `user_role`
                    ON `user`.`role_id` = `user_role`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }
    public function getAllRole()
    {
        return $this->db->get('user_role')->result_array();
    }

    public function getByIdpendaftar($id)
    {
        return $this->db->get_where('pendaftar', ['id_pendaftar' => $id])->row_array();
    }

    public function getuserId($id = NULL)
    {
        $query = "SELECT *
                    FROM user  AS k
                    WHERE k.role_id = '$id'
                    ";
        return $this->db->query($query);
    }

    public function getjmlpendaftar()
    {
        $query = "SELECT *
                    FROM pendaftar AS p
                    WHERE p.is_active = 1
                    ";
        return $this->db->query($query);
    }
}
