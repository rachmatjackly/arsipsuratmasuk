<?php

class Model_surat extends CI_Model {

    function addSuratKeluar($data)
    {
        $this->db->insert('tb_surat_keluar', $data);
    }

    function addSuratMasuk($data)
    {
        $this->db->insert('tb_surat_masuk', $data);
    }

    function getAllSuratKeluar()
    {
        return $this->db->get('tb_surat_keluar')->result();
    }

    function getAllSuratMasuk()
    {
        return $this->db->get('tb_surat_masuk')->result();
    }

    function getSuratKeluarById($id)
    {
        return $this->db->get_where('tb_surat_keluar', ['nm_sr_luar' => $id])->result();
    }

    function getSuratMasukById($id)
    {
        return $this->db->get_where('tb_surat_masuk', ['nm_sr_masuk' => $id])->result();
    }

    function getSuratMasukByMonth($year, $month)
    {
        $query = $this->db->query("Select * from tb_surat_masuk where YEAR(tg_sr_masuk) = $year and MONTH(tg_sr_masuk) = $month");
        return $query->num_rows();
    }

    function getSuratKeluarByMonth($year, $month)
    {
        $query = $this->db->query("Select * from tb_surat_keluar where YEAR(tg_sr_luar_bt) = $year and MONTH(tg_sr_luar_bt) = $month");
        return $query->num_rows();
    }

    function getSuratMasukByYear($year)
    {
        $this->db->where("DATE_FORMAT(tg_sr_masuk,'%Y')", $year);
        return $this->db->get('tb_surat_masuk')->num_rows();
    }

    function getSuratKeluarByYear($year)
    {
        $this->db->where("DATE_FORMAT(tg_sr_luar_bt,'%Y')", $year);
        return $this->db->get('tb_surat_keluar')->num_rows();
    }

    public function getSuratMasukLikeId($id)
    {
        $this->db->like('judul_masuk', $id);
        return $this->db->get('tb_surat_masuk')->result();
    }

    public function getSuratKeluarLikeId($id)
    {
        $this->db->like('judul_luar', $id);
        return $this->db->get('tb_surat_keluar')->result();
    }

    function updateSuratKeluar($id, $data)
    {
        $this->db->where(['nm_sr_luar' => $id]);
        $this->db->update('tb_surat_keluar', $data);
    }

    function updateSuratMasuk($id, $data)
    {
        $this->db->where(['nm_sr_masuk' => $id]);
        $this->db->update('tb_surat_masuk', $data);
    }

    function deleteSuratKeluar($id)
    {
        $this->db->where(['nm_sr_luar' => $id]);
        $this->db->delete('tb_surat_keluar');
    }

    function deleteSuratMasuk($id)
    {
        $this->db->where(['nm_sr_masuk' => $id]);
        $this->db->delete('tb_surat_masuk');
    }
}