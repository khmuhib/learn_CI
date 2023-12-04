<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends CI_Controller
{
	public function index()
	{
		echo "I am index method";
		// $this->load->view('contact/contact');
	}

	public function contact()
	{
		echo "I am contact page";
	}

	public function about()
	{
		echo "I am about page";
	}

	public function blog()
	{
		echo "I am blog page";
	}

	public function blog_detail($id = '')
	{
		echo "I am blog detail page with blog url : " . $id;
	}
}
