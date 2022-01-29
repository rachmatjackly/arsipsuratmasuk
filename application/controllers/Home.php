<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pengumuman');
        $this->load->model('Model_user');
    }

	public function index()
    {
        $data['pengumuman'] = $this->Model_pengumuman->getAll();
        $data['title'] = "Halaman Dashboard";
        $data['user'] = $this->Model_user->getAll();
        $data['nav'] = array("active","");
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail_pengumuman($id, $detail = "")
    {
        $data['data'] = $this->Model_pengumuman->getPengumumanById($id);
        $data['nav'] = array("active","");
        $data['title'] = "Halaman Isi Pengumuman";
        $this->load->view('templates/header', $data);
        $this->load->view('home/detail_pengumuman', $data);
        $this->load->view('templates/footer');
    }

    public function search()
    {
        $id = $this->input->post('search');
        $querySearch = $this->Model_pengumuman->getPengumumanLikeId($id);

        $output = '';
        if(count($querySearch) > 0) {
            foreach($querySearch as $data){
                $output .='
                    <tr>
                        <td>' . $data['nm_pengumuman'] . '</td>
                        <td>' . $data['tg_pengumuman'] . '</td>
                        <td>' . $data['id_user'] . '</td>
                        <td>' . $data['jk_pengumuman'] . '</td>
                        <td>' . $data['judul_pengumuman'] . '</td>
                        <td><a href=' . base_url() . 'pengumuman/' . $data['nm_pengumuman'] . '/detail>Lihat</a></td>
                    </tr>
                ';
            };
            echo $output;
        } else {
            $output .='
                    <tr>
                        <td colspan="6" class="text-center" > Data Tidak Ditemukan </td>
                    </tr>
                ';
            echo $output;
        }
        
        
    }

}
