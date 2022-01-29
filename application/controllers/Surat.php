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

        $this->session->set_flashdata('add', 1);
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
            
            $this->session->set_flashdata('update', 1);
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

        $this->session->set_flashdata('update', 1);
        $this->Model_surat->updateSuratKeluar($id, $data);
        redirect('admin/surat_keluar');
    }

    function delete_surat_keluar()
    {
        $this->Model_surat->deleteSuratKeluar($this->input->post("id"));
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

        $this->session->set_flashdata('add', 1);
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

            $this->session->set_flashdata('update', 1);
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

        $this->session->set_flashdata('update', 1);
        $this->Model_surat->updateSuratMasuk($id, $data);
        redirect('admin/surat_masuk');
    }

    function delete_surat_masuk()
    {
        $this->Model_surat->deleteSuratMasuk($this->input->post("id"));
    }

    public function search($id)
    {
        if($id == "masuk"){
            $param = $this->input->post('search');
            $querySearch = $this->Model_surat->getSuratMasukLikeId($param);

            $this->template_search_masuk($querySearch);
        };

        if($id == "keluar"){
            $param = $this->input->post('search');
            $querySearch = $this->Model_surat->getSuratKeluarLikeId($param);

            $this->template_search_keluar($querySearch);
        }
       
    }

    private function template_search_masuk($querySearch)
    {
        $output = '';
        if(count($querySearch) > 0 ) {
            foreach($querySearch as $data){
                $output .= '
                    <tr>
                        <td style="width: 3%">
                            <a href= ' . base_url() . 'admin/surat_masuk/edit/' . $data->nm_sr_masuk . '>Edit</a>⠀⠀
                            <a href=' . base_url() . 'surat/delete_surat_masuk/' . $data->nm_sr_masuk . " OnClick='return confirm('Yakin?')'>Hapus</a>
                        </td>
                        <td>" . $data->nm_sr_masuk . '</td>
                        <td>' . $data->tg_sr_masuk . '</td>
                        <td>' . $data->tg_sr_masuk_dt . '</td>
                        <td>' . $data->perihal_masuk . '</td>
                        <td>' . $data->judul_masuk . '</td>
                        <td>' . $data->pengirim_masuk . '</td>
                        <td>' . $data->jk_masuk . '</td>
                        <td>' . $data->penerima_masuk .'</td>
                        <td><a href=' . base_url() . 'assets/uploads/' . $data->dok_msk . '>Unduh</a></td>
                        <td>' . $data->id_user . '</td>
                    </tr>
                ';
            }
            echo $output;
        } else {
            $output .= '
                    <tr>
                        <td colspan="11" class="text-center">Data Tidak Ditemukan</td>
                    </tr>
                ';
            echo $output;
        }
    }

    private function template_search_keluar($querySearch)
    {
        $output = '';
        if(count($querySearch) > 0 ) {
            foreach($querySearch as $data){
                $output .= '
                    <tr>
                        <td style="width: 3%">
                            <a href= ' . base_url() . 'admin/surat_keluar/edit/' . $data->nm_sr_luar . '>Edit</a>⠀⠀
                            <a href=' . base_url() . 'surat/delete_surat_keluar/' . $data->nm_sr_luar . ' OnClick="return confirm(Surat Keluar akan dihapus. Lanjutkan?)">Hapus</a>
                        </td>
                        <td>' . $data->nm_sr_luar . '</td>
                        <td>' . $data->tg_sr_luar_bt . '</td>
                        <td>' . $data->tg_sr_luar_lk . '</td>
                        <td>' . $data->perihal_luar . '</td>
                        <td>' . $data->judul_luar . '</td>
                        <td>' . $data->pembuat_sr_luar . '</td>
                        <td>' . $data->jk_luar . '</td>
                        <td>' . $data->penerima_sr_luar .'</td>
                        <td><a href=' . base_url() . 'assets/uploads/' . $data->dok_luar . '>Unduh</a></td>
                        <td>' . $data->id_user . '</td>
                    </tr>
                ';
            }
            echo $output;
        } else {
            $output .= '
                    <tr>
                        <td colspan="11" class="text-center">Data Tidak Ditemukan</td>
                    </tr>
                ';
                echo $output;
        }
    }
}