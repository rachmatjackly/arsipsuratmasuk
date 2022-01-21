<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengumuman extends CI_Model {

    public function getAll()
    {
        return $this->db->get('tb_user')->result();
    }

    public function getByUsernameAndPassword($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('tb_user')->result();
    }
}
