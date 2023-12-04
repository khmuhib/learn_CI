<?php

class StudentModel extends CI_Model
{
	public function student_data()
	{
		return $student_name = "Muhib";
		// $query = $this->db->get('student');
		// return $query->result();
	}

	public function student_show($id)
	{
		if ($id == 1) {
			return "Muhib";
		} elseif ($id == 2) {
			return "Aslam";
		} else {
			return "Oher";
		}
	}
}
