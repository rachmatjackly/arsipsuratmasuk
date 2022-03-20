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
        $min = 1;
        $max = 50;
        $data['random_number1'] = mt_rand($min, $max);
        $data['random_number2'] = mt_rand($min, $max);
        $data['title'] = "Halaman Login";
        $data['nav'] = array("","active");
        $this->load->view('login/index', $data);
    }

    public function submitLogin()
    {
        $number1 = $this->input->post('number1');
        $number2 = $this->input->post('number2');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $number1 + $number2;
        $code = $this->input->post('captcha');
        $checkUser = $this->Model_user->getByUsernameAndPassword($username, $password);

        if ($code != $result) {
            $this->session->set_flashdata('login','gagal');
            redirect('login', 'refresh');
        }else{
            if ($checkUser) {
                $session = array(
                    "login" => True,
                    "nama" => $checkUser[0]->nama_user,
                    "status" => $checkUser[0]->status
                );
                $this->session->set_userdata($session);
    
                redirect('admin');
            }else{
                $this->session->set_flashdata('login','salah');
                redirect('login', 'refresh');
            }
        }
    }
}
