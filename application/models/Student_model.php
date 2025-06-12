<?php

class Student_model extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('students')->result();
    }
}
