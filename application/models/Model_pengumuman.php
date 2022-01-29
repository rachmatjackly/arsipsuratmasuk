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
