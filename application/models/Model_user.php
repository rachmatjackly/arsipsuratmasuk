<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

    public function getAll()
    {
        return $this->db->get('tb_user')->result();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('tb_user', ['id_user' => $id])->result();
    }

    public function getByUsernameAndPassword($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('tb_user')->result();
    }

    public function getUserLikeId($id)
    {
        $this->db->like('nama_user', $id);
        return $this->db->get('tb_user')->result();
    }

    public function addUser($data)
    {
        $this->db->insert('tb_user', $data);
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }
}
