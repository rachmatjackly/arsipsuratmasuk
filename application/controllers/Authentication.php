<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

	public function login()
    {
        $data['nav'] = array("","active");
        $this->load->view('templates/header' , $data);
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function submitLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $checkUser = $this->Model_user->getByUsernameAndPassword($username, $password);

        if ($checkUser) {
            $session = array(
                "login" => True,
                "nama" => $checkUser[0]->nama_user
            );
            $this->session->set_userdata($session);

            redirect('admin');
        }
        redirect('login', 'refresh');

    }
}
