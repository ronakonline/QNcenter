<?php

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Faculty/UserM');
	}

	public function index()
	{
		$data['title'] = "Faculty Login || QN-Center";
		if (isset($_SESSION['faculty'])) {
			redirect(base_url('Faculty'));
		}
		$this->load->view('Faculty/login', $data);
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url('Faculty/login'));
	}

	public function login()
	{
		$data = $this->input->post();
		$op = $this->UserM->checklogin($data);
		if ($op != false) {
			session_destroy();
			session_start();
			$_SESSION['Faculty'] = $op;
		} else {
			$_SESSION['error'] = "Incorrect Username or Password";
		}
		redirect(base_url('Faculty'));
	}
}
