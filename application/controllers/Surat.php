<?php

class Surat extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_surat');
    }

    function save_surat_keluar()
    {
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file1')) {
            echo "salah anjay";
        } else {
            $dokumen = array('upload_data' => $this->upload->data());
        }
        
        $data = array(
            "nm_sr_luar" => $this->input->post('0'),
            "tg_sr_luar_bt" => $this->input->post('1'),
            "tg_sr_luar_lk" => $this->input->post('2'),
            "perihal_luar" => $this->input->post('3'),
            "judul_luar" => $this->input->post('4'),
            "jk_luar" => $this->input->post('5'),
            "pembuat_sr_luar" => $this->input->post('6'),
            "penerima_sr_luar" => $this->input->post('7'),
            "dok_luar" => $dokumen['upload_data']['file_name'],
            "id_user" => $this->session->nama,
        );

        $this->Model_surat->addSuratKeluar($data);
        redirect('admin/surat_keluar');
    }

    function update_surat_keluar($id)
    {
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if ($_FILES['file1']['name'] == "") {
            $data = array(
                "nm_sr_luar" => $this->input->post('0'),
                "tg_sr_luar_bt" => $this->input->post('1'),
                "tg_sr_luar_lk" => $this->input->post('2'),
                "perihal_luar" => $this->input->post('3'),
                "judul_luar" => $this->input->post('4'),
                "jk_luar" => $this->input->post('5'),
                "pembuat_sr_luar" => $this->input->post('6'),
                "penerima_sr_luar" => $this->input->post('7'),
                "id_user" => $this->session->nama,
            );
    
            $this->Model_surat->updateSuratKeluar($id, $data);
            redirect('admin/surat_keluar');
        }

        if (!$this->upload->do_upload('file1')) {
            echo "salah anjay";
        } else {
            $dokumen = array('upload_data' => $this->upload->data());
        }
        
        $data = array(
            "nm_sr_luar" => $this->input->post('0'),
            "tg_sr_luar_bt" => $this->input->post('1'),
            "tg_sr_luar_lk" => $this->input->post('2'),
            "perihal_luar" => $this->input->post('3'),
            "judul_luar" => $this->input->post('4'),
            "jk_luar" => $this->input->post('5'),
            "pembuat_sr_luar" => $this->input->post('6'),
            "penerima_sr_luar" => $this->input->post('7'),
            "dok_luar" => $dokumen['upload_data']['file_name'],
            "id_user" => $this->session->nama,
        );

        $this->Model_surat->updateSuratKeluar($id, $data);
        redirect('admin/surat_keluar');
    }

    function delete_surat_keluar($id)
    {
        $this->Model_surat->deleteSuratKeluar($id);
        redirect('admin/surat_keluar');
    }

    function save_surat_masuk()
    {
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file1')) {
            echo "salah anjay";
        } else {
            $dokumen = array('upload_data' => $this->upload->data());
        }

        $data = array(
            "nm_sr_masuk" => $this->input->post('0'),
            "tg_sr_masuk" => $this->input->post('1'),
            "tg_sr_masuk_dt" => $this->input->post('2'),
            "perihal_masuk" => $this->input->post('3'),
            "judul_masuk" => $this->input->post('4'),
            "pengirim_masuk" => $this->input->post('5'),
            "jk_masuk" => $this->input->post('6'),
            "penerima_masuk" => $this->input->post('7'),
            "dok_msk" => $dokumen['upload_data']['file_name'],
            "id_user" => $this->session->nama,
        );

        $this->Model_surat->addSuratMasuk($data);
        redirect('admin/surat_masuk');
    }

    function update_surat_masuk($id)
    {
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if ($_FILES['file1']['name'] == "") {
            $data = array (
                "nm_sr_masuk" => $this->input->post('0'),
                "tg_sr_masuk" => $this->input->post('1'),
                "tg_sr_masuk_dt" => $this->input->post('2'),
                "perihal_masuk" => $this->input->post('3'),
                "judul_masuk" => $this->input->post('4'),
                "pengirim_masuk" => $this->input->post('5'),
                "jk_masuk" => $this->input->post('6'),
                "penerima_masuk" => $this->input->post('7'),
                "id_user" => $this->session->nama,
            );

            $this->Model_surat->updateSuratMasuk($id, $data);
            redirect('admin/surat_masuk');
        }

        if (!$this->upload->do_upload('file1')) {
            echo "salah anjay";
        } else {
            $dokumen = array('upload_data' => $this->upload->data());
        }

        $data = array(
            "nm_sr_masuk" => $this->input->post('0'),
            "tg_sr_masuk" => $this->input->post('1'),
            "tg_sr_masuk_dt" => $this->input->post('2'),
            "perihal_masuk" => $this->input->post('3'),
            "judul_masuk" => $this->input->post('4'),
            "pengirim_masuk" => $this->input->post('5'),
            "jk_masuk" => $this->input->post('6'),
            "penerima_masuk" => $this->input->post('7'),
            "dok_msk" => $dokumen['upload_data']['file_name'],
            "id_user" => $this->session->nama,
        );

        $this->Model_surat->updateSuratMasuk($id, $data);
        redirect('admin/surat_masuk');
    }

    function delete_surat_masuk($id)
    {
        $this->Model_surat->deleteSuratMasuk($id);
        redirect('admin/surat_masuk');
    }
}