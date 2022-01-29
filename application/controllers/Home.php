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
        $data['user'] = $this->Model_user->getAll();
        $data['nav'] = array("active","");
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

}
