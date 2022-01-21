<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

    public function getAll()
    {
        return $this->db->get('tb_user')->result();
    }
}
