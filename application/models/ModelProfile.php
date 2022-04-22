<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelProfile extends CI_Model
{
    public function userGetSession()
    {
        return
            $this->db->get_where('user', ['nip' =>
            $this->session->userdata('nip')])->row_array();
    }
    public function tolak($id)
    {
        $this->db->where('id_pendaftar', $id);
        $this->db->delete('pendaftar');
        return true;
    }
}
