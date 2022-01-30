<?php

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->login != TRUE) {
            redirect('/');
        }
        $this->load->model('Model_surat');
        $this->load->model('Model_pengumuman');
        $this->load->model('Model_user');
    }

    function index() 
    {
        $data['nav'] = ["active","","","",""];
        $data['title'] = "Halaman Utama Admin";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    function surat_masuk()
    {
        $data['nav'] = ["","","active","",""];
        $data['surat_masuk'] = $this->Model_surat->getAllSuratMasuk();
        $data['title'] = "Halaman Surat Masuk";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/surat/masuk/index');
        $this->load->view('admin/templates/footer');
    }

    function surat_keluar()
    {
        $data['nav'] = ["","active","","",""];
        $data['surat_keluar'] = $this->Model_surat->getAllSuratKeluar();
        $data['title'] = "Halaman Surat Keluar";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/surat/keluar/index');
        $this->load->view('admin/templates/footer');
    }

    function edit_surat_keluar($id)
    {
        $data['nav'] = ["","active","","",""];
        $data['data'] = $this->Model_surat->getSuratKeluarById($id);
        $data['title'] = "Halaman Edit Surat Keluar";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/surat/keluar/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    function edit_surat_masuk($id)
    {
        $data['nav'] = ["","","active","",""];
        $data['data'] = $this->Model_surat->getSuratMasukById($id);
        $data['title'] = "Halaman Edit Surat Keluar";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/surat/masuk/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    function pengumuman()
    {
        $data['nav'] = ["","","","active",""];
        $data['data'] = $this->Model_pengumuman->getAll();
        $data['title'] = "Halaman Pengumuman";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pengumuman/index', $data);
        $this->load->view('admin/templates/footer');
    }
    
    function detail_pengumuman($id, $detail = "")
    {
        $data['nav'] = ["","","","active",""];
        $data['data'] = $this->Model_pengumuman->getPengumumanById($id);
        $data['title'] = "Halaman Isi Pengumuman";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pengumuman/detail', $data);
        $this->load->view('admin/templates/footer');
    }

    function edit_pengumuman($id, $edit = "")
    {
        $data['nav'] = ["","","","active",""];
        $data['data'] = $this->Model_pengumuman->getPengumumanById($id);
        $data['title'] = "Halaman Edit Pengumuman";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pengumuman/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    function user()
    {
        $data['nav'] = ["","","","","active"];
        $data['data'] = $this->Model_user->getAll();
        $data['title'] = "Halaman Admin";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/templates/footer');
    }

    function edit_user($id, $edit = "")
    {
        $data['nav'] = ["","","","","active"];
        $data['data'] = $this->Model_user->getUserById($id);
        $data['title'] = "Halaman Edit Admin";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/user/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}