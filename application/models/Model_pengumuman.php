<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengumuman extends CI_Model {

    public function getAll()
    {
        return $this->db->get('tb_pengumuman')->result();
    }

    public function getPengumumanById($id)
    {
        return $this->db->get_where('tb_pengumuman', ['nm_pengumuman' => $id])->result();
    }

    public function getPengumumanLikeId($id)
    {
        $this->db->like('judul_pengumuman', $id);
        return $this->db->get('tb_pengumuman')->result_array();
    }

    public function getPengumumanByMonth($bulan)
    {
        $this->db->where("DATE_FORMAT(tg_pengumuman,'%m-%Y')", $bulan);
        return $this->db->get('tb_pengumuman')->num_rows();
    }

    public function getPengumumanByYear($year)
    {
        $this->db->where("DATE_FORMAT(tg_pengumuman,'%Y')", $year);
        return $this->db->get('tb_pengumuman')->num_rows();
    }

    public function addPengumuman($data)
    {
        $this->db->insert('tb_pengumuman', $data);
    }

    public function updatePengumuman($id, $data)
    {
        $this->db->where('nm_pengumuman', $id);
        $this->db->update('tb_pengumuman', $data);
    }

    public function deletePengumuman($id)
    {
        $this->db->where('nm_pengumuman', $id);
        $this->db->delete('tb_pengumuman');
    }
}
