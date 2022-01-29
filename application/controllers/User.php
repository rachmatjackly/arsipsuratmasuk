<?php

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function save_user()
    {
        $config['upload_path']          = './assets/uploads/images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file1')) {
            echo "salah anjay";
        } else {
            $dokumen = array('upload_data' => $this->upload->data());
        }
        
        $data = array(
            "id_user" => $this->input->post('0'),
            "nama_user" => $this->input->post('1'),
            "no_hp" => $this->input->post('2'),
            "email" => $this->input->post('3'),
            "alamat" => $this->input->post('4'),
            "username" => $this->input->post('5'),
            "password" => $this->input->post('6'),
            "foto_user" => $dokumen['upload_data']['file_name']
        );

        $this->session->set_flashdata('add', 1);
        $this->Model_user->addUser($data);
        redirect('admin/user');
    }

    public function update_user($id)
    {
        $config['upload_path']          = './assets/uploads/images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5000;

        if($this->input->post('6') == "" && $_FILES['file1']['name'] == "") {
            $data = array(
                "id_user" => str_replace(" ","",trim($this->input->post('0'))),
                "nama_user" => $this->input->post('1'),
                "no_hp" => $this->input->post('2'),
                "email" => $this->input->post('3'),
                "alamat" => $this->input->post('4'),
                "username" => $this->input->post('5'),
            );
            
            $this->session->set_flashdata('update', 1);
            $this->Model_user->updateUser($id, $data);
            redirect('admin/user');
        }

        if($_FILES['file1']['name'] == "" && $this->input->post('6') != "") {
            $data = array(
                "id_user" => str_replace(" ","",trim($this->input->post('0'))),
                "nama_user" => $this->input->post('1'),
                "no_hp" => $this->input->post('2'),
                "email" => $this->input->post('3'),
                "alamat" => $this->input->post('4'),
                "username" => $this->input->post('5'),
                "password" => $this->input->post('6'),
            );
            
            $this->session->set_flashdata('update', 1);
            $this->Model_user->updateUser($id, $data);
            redirect('admin/user');
        }

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file1')) {
            echo "salah anjay";
        } else {
            $dokumen = array('upload_data' => $this->upload->data());
        }

        if($_FILES['file1']['name'] != "" && $this->input->post('6') == "") {
            $data = array(
                "id_user" => str_replace(" ","",trim($this->input->post('0'))),
                "nama_user" => $this->input->post('1'),
                "no_hp" => $this->input->post('2'),
                "email" => $this->input->post('3'),
                "alamat" => $this->input->post('4'),
                "username" => $this->input->post('5'),
                "foto_user" => $dokumen['upload_data']['file_name']
            );
            
            $this->session->set_flashdata('update', 1);
            $this->Model_user->updateUser($id, $data);
            redirect('admin/user');
        }
        
        $data = array(
            "id_user" => str_replace(" ","",trim($this->input->post('0'))),
            "nama_user" => $this->input->post('1'),
            "no_hp" => $this->input->post('2'),
            "email" => $this->input->post('3'),
            "alamat" => $this->input->post('4'),
            "username" => $this->input->post('5'),
            "password" => $this->input->post('6'),
            "foto_user" => $dokumen['upload_data']['file_name']
        );

        $this->session->set_flashdata('update', 1);
        $this->Model_user->updateUser($id, $data);
        redirect('admin/user');
    }

    public function search()
    {
        $id = $this->input->post('search');
        $querySearch = $this->Model_user->getUserLikeId($id);

        $output = '';
        if(count($querySearch) > 0 ) {
            foreach($querySearch as $data){
                $output .= '
                    <tr>
                        <td style="width: 3%">
                            <a href= ' . base_url() . 'admin/user/' . $data->id_user . '/edit>Edit</a>⠀⠀
                        </td>
                        <td>' . $data->id_user . '</td>
                        <td>' . $data->nama_user . '</td>
                        <td>' . $data->no_hp . '</td>
                        <td>' . $data->email . '</td>
                        <td>' . $data->alamat . '</td>
                        <td><img src=' . base_url() . 'assets/uploads/images/' . $data->foto_user . 'class="col-md-5"></td>
                    </tr>
                ';
            }
            echo $output;
        } else {
            $output .= '
                    <tr>
                        <td colspan="7" class="text-center">Data Tidak Ditemukan</td>
                    </tr>
                ';
            echo $output;
        }
    }
}