<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Model_user');
    // }

	public function index()
    {
        $data['nav'] = array("active","");
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
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
