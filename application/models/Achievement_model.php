<?php

class Achievement_model extends CI_Model
{

    public function get_by_student_id($student_id)
    {
        return $this->db->get_where('student_achievements', ['student_id' => $student_id])->result();
    }
}
