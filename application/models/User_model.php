<?php

class User_model extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('users', $data);
    }

    public function get_by_username($username)
    {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row();
    }
}
