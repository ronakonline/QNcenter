<?php

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sadmin/UserM');
	}

	public function index()
	{
		if (isset($_SESSION['Sadmin'])) {
			redirect(base_url('Sadmin'));
		}
		$this->load->view('Sadmin/login');
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url('Sadmin/login'));
	}

	public function login()
	{
		$data = $this->input->post();
		$op = $this->UserM->checklogin($data);
		if ($op != false) {
			session_destroy();
			session_start();
			$_SESSION['Sadmin'] = $op;
		} else {
			$_SESSION['error'] = "Incorrect Username or Password";
		}
		redirect(base_url('Sadmin'));
	}

}
