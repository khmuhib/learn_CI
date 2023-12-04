<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
	public function index()
	{
		$this->load->model('StudentModel');
		// $student_name = $this->StudentModel->student_data();

		$student = new StudentModel();

		$student_name = $student->student_data();

		// echo $student_name;
		$this->load->view('student/index', ['std' => $student_name]);
	}

	public function show($id)
	{
		$this->load->model('StudentModel', 'student');

		// $student = $this->student->student_show($id);

		$student = new StudentModel();

		$student = $student->student_show($id);

		$this->load->view('student/show', ['student' => $student]);
		// echo $student;
	}
}
