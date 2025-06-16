<?php

class Payment_model extends CI_Model
{

    public function get_test_by_student($student_id)
    {
        return $this->db->get_where('payments', ['type' => 'test', 'student_id' => $student_id])->row();
    }

    public function get_rereg_by_student($student_id)
    {
        return $this->db->get_where('payments', ['type' => 'rereg', 'student_id' => $student_id])->row();
    }

    public function insert(array $data)
    {
        return $this->db->insert('payments', $data);
    }

    public function update($id, array $data)
    {
        return $this->db->where('id', $id)->update('payments', $data);
    }
}
