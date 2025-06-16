<?php

class Test_model extends CI_Model
{

    public function get_by_student($student_id)
    {
        return $this->db->get_where('tests', ['student_id' => $student_id])->row();
    }

    public function insert(array $data)
    {
        return $this->db->insert('tests', $data);
    }

    public function update($id, array $data)
    {
        return $this->db->where('id', $id)->update('tests', $data);
    }
}
