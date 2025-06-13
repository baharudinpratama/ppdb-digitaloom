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
}
