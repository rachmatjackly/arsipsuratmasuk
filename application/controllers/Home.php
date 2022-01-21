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
        $this->load->view('templates/header');
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function submitLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $checkUser = $this->Model_user->getByUsernameAndPassword($username, $password);

        if ($checkUser) {
            echo 'login';
        }

    }
}
