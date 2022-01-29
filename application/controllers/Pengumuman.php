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

        $this->session->set_flashdata('add', 1);
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

        $this->session->set_flashdata('update', 1);
        $this->Model_pengumuman->updatePengumuman($id, $data);
        redirect('admin/pengumuman');
    }

    function delete_pengumuman()
    {
        $this->Model_pengumuman->deletePengumuman($this->input->post("id"));
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
                        <td style="width: 3%">
                            <a
                                href=' . base_url() . 'admin/pengumuman/' . $data['nm_pengumuman'] . '/edit>Edit</a>⠀⠀
                            <a href=' . base_url() . 'pengumuman/delete_pengumuman/' . $data['nm_pengumuman'] . '
                                OnClick="return confirm()">Hapus</a>
                        </td>
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