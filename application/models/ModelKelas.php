<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKelas extends CI_Model
{
    public function getAllMateri()
    {
        return $this->db->get('materi')->result_array();
    }
    public function getAllPembelajaran($where = null)
    {
        $this->db->select('*');
        $this->db->from('pembelajaran');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getPembelajaran()
    {
        $query =
            "SELECT `pembelajaran`.*, `kelas`.`judul_kelas`, `kelas`.`pertemuan`
                    FROM `pembelajaran` 
                    JOIN `kelas` ON `pembelajaran`.`id_pem` = `kelas`.`id_kelas`
                    ";
        return $this->db->query($query)->result_array();
    }
    public function getTugas($id)
    {
        $query = "SELECT *
                    FROM tugas  AS t
                    JOIN pembelajaran AS p ON p.id_pem = t.id_pem
                    JOIN kelas AS k ON t.id_kelas = k.id_kelas
                    WHERE t.id_kelas = '$id'
                    ";
        return $this->db->query($query)->result_array();
    }

    public function getTugasTerkumpul($id)
    {
        $query = "SELECT *
                    FROM kelas  AS k
                    JOIN tugas AS t ON t.id_kelas = k.id_kelas
                    JOIN relasi_tugas AS r ON r.id_tugas = t.id_tugas
                    JOIN user AS u ON r.nip = u.nip
                    WHERE k.id_kelas = '$id'
                    ";
        return $this->db->query($query)->result_array();
    }

    // public function gettgsterkumpul($where = null)
    // {
    //     $this->db->select('*');
    //     $this->db->from('relasi_tugas');
    //     $this->db->where($where);
    //     return $this->db->get();
    // }


    public function gettgsterkumpul($id = NULL)
    {
        $query = "SELECT *
                    FROM kelas  AS k
                    JOIN tugas AS t ON t.id_kelas = k.id_kelas
                    JOIN relasi_tugas AS r ON r.id_tugas = t.id_tugas
                    WHERE k.id_kelas = '$id'
                    ";
        return $this->db->query($query);
    }

    public function getsudahabsen($id = NULL)
    {
        $query = "SELECT *
                    FROM absensi  AS k
                    WHERE k.id_kelas = '$id'
                    ";
        return $this->db->query($query);
    }

    public function getnilaitugas($nip)
    {
        $query = "SELECT *
                    FROM relasi_tugas  AS r
                    JOIN tugas AS t ON t.id_tugas = r.id_tugas
                    JOIN user AS u ON r.nip = u.nip
                    WHERE r.nip = '$nip'
                    ";
        return $this->db->query($query)->result_array();
    }

    public function getAllTugas()
    {
        return $this->db->get('tugas')->result_array();
    }

    public function getAllAbsensi()
    {
        return $this->db->get('absensi')->result_array();
    }


    public function getAbs($id, $nip)
    {
        $query = "SELECT *
                    FROM absensi  AS a
                    JOIN kelas AS k ON k.id_kelas = a.id_kelas
                    JOIN user AS u ON a.nip_user = u.nip
                    WHERE a.id_kelas = '$id' AND a.nip_user = '$nip'
                    ";
        return $this->db->query($query)->row_array();
    }

    public function getUploadTugas($id, $nip)
    {
        $query = "SELECT *
                    FROM relasi_tugas  AS r
                    JOIN tugas AS t ON t.id_tugas = r.id_tugas
                    JOIN user AS u ON r.nip = u.nip
                    WHERE r.id_tugas = '$id' AND r.nip = '$nip'
                    ";
        return $this->db->query($query)->row_array();
    }

    public function getTelatAbsen($id, $nip)
    {
        $query = "SELECT *
                    FROM absensi  AS a
                    JOIN kelas AS k ON k.id_kelas = a.id_kelas
                    JOIN user AS u ON u.nip = a.nip_user
                    WHERE a.id_kelas = '$id' AND a.nip_user = '$nip'
                    ";
        return $this->db->query($query)->row_array();
    }

    public function getAbsensi($where = null)
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where($where);
        return $this->db->get();
    }

    public function kirimNilai($where = null)
    {
        $this->db->select('*');
        $this->db->from('relasi_tugas');
        $this->db->join('user', 'user.nip = relasi_tugas.nip');
        $this->db->where($where);
        return $this->db->get();
    }



    public function getAllKelas()
    {
        $query = "SELECT *
                    FROM kelas  AS k
                    JOIN materi AS m ON k.id_materi = m.id_materi
                    JOIN user AS u ON k.nip_user = u.nip
                    ";
        return $this->db->query($query)->result_array();
    }
    public function getByIdkelas($id)
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('materi', 'kelas.id_materi = materi.id_materi');
        $this->db->join('user', 'kelas.nip_user = user.nip');
        $this->db->where('kelas.id_kelas', $id);
        return $this->db->get()->row_array();
    }


    // Rekap Nilai

    function nilaiMateri($nip, $id_materi)
    {
        return $this->db->query("SELECT SUM(nilai) AS jml 
			FROM materi AS m 
			JOIN kelas AS k ON m.id_materi = k.id_materi 
			JOIN tugas AS t ON t.id_kelas = k.id_kelas 
			JOIN relasi_tugas AS r ON r.id_tugas = t.id_tugas 
			WHERE m.id_materi = '$id_materi' AND r.nip ='$nip'");
    }

    public function totalMateri($id = NULL)
    {
        $query = "SELECT *
                    FROM materi AS m 
                    JOIN kelas AS k ON m.id_materi = k.id_materi 
                    JOIN tugas AS t ON t.id_kelas = k.id_kelas  
                    WHERE m.id_materi = '$id'
                    ";
        return $this->db->query($query);
    }

    function nilaiAbsen($nip, $status)
    {
        $query = "SELECT *
                    FROM absensi AS a 
                    JOIN kelas AS k ON a.id_kelas = k.id_kelas  
                    WHERE a.nip_user = '$nip' AND a.status = '$status'
                    ";
        return $this->db->query($query);
    }

    function totalAbsen()
    {
        $query = "SELECT *
                    FROM kelas
                    ";
        return $this->db->query($query);
    }

    // forum chat
    function get_chat_forum($id)
    {
        $this->db->select('*');
        $this->db->from('chat_forum');
        $this->db->where('id_kelas', $id);
        return $this->db->get();
    }

    function get_absen($id)
    {
        $query = "SELECT *
                    FROM absensi AS a
                    JOIN user as u ON a.nip_user = u.nip
                    WHERE a.id_kelas = '$id'
                    ";
        return $this->db->query($query);
    }
}
