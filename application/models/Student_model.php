<?php

class Student_model extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('students')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('students', ['id' => $id])->row();
    }

    public function insert(array $data)
    {
        return $this->db->insert('students', $data);
    }

    public function update($id, array $data)
    {
        return $this->db->where('id', $id)->update('students', $data);
    }
}
