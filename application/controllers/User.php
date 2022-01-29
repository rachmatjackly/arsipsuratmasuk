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
                "id_user" => $this->input->post('0'),
                "nama_user" => $this->input->post('1'),
                "no_hp" => $this->input->post('2'),
                "email" => $this->input->post('3'),
                "alamat" => $this->input->post('4'),
                "username" => $this->input->post('5'),
            );
    
            $this->Model_user->updateUser($id, $data);
            redirect('admin/user');
        }

        if($_FILES['file1']['name'] == "" && $this->input->post('6') != "") {
            $data = array(
                "id_user" => $this->input->post('0'),
                "nama_user" => $this->input->post('1'),
                "no_hp" => $this->input->post('2'),
                "email" => $this->input->post('3'),
                "alamat" => $this->input->post('4'),
                "username" => $this->input->post('5'),
                "password" => $this->input->post('6'),
            );
    
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
                "id_user" => $this->input->post('0'),
                "nama_user" => $this->input->post('1'),
                "no_hp" => $this->input->post('2'),
                "email" => $this->input->post('3'),
                "alamat" => $this->input->post('4'),
                "username" => $this->input->post('5'),
                "foto_user" => $dokumen['upload_data']['file_name']
            );
    
            $this->Model_user->updateUser($id, $data);
            redirect('admin/user');
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

        $this->Model_user->updateUser($id, $data);
        redirect('admin/user');
    }
}