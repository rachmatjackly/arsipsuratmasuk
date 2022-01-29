<?php

class Pengumuman extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pengumuman');
    }

    function save_pengumuman()
    {
        $data = array(
            'nm_pengumuman' => $this->input->post('0'),
            'tg_pengumuman' => $this->input->post('1'),
            'judul_pengumuman' => $this->input->post('2'),
            'jk_pengumuman' => $this->input->post('3'),
            'id_user' => $this->session->nama,
            'isi_pengumuman' => $this->input->post('4'),
        );

        $this->Model_pengumuman->addPengumuman($data);
        redirect('admin/pengumuman');
    }

    function update_pengumuman($id)
    {
        $data = array(
            'nm_pengumuman' => $this->input->post('0'),
            'tg_pengumuman' => $this->input->post('1'),
            'judul_pengumuman' => $this->input->post('2'),
            'jk_pengumuman' => $this->input->post('3'),
            'id_user' => $this->session->nama,
            'isi_pengumuman' => $this->input->post('4'),
        );

        $this->Model_pengumuman->updatePengumuman($id, $data);
        redirect('admin/pengumuman');
    }

    function delete_pengumuman($id)
    {
        $this->Model_pengumuman->deletePengumuman($id);
        redirect('admin/pengumuman');
    }
}