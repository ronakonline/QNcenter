<?php

class User extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute/UserM');
	}

	public function  index(){
		$this->load->view('Institute/login');
	}
	public  function  logout(){
		session_destroy();
		redirect(base_url('Institute/login'));
	}
	public  function  login(){
		$data = $this->input->post();
		$op = $this->UserM->checklogin($data);
		if($op!=false){
			$_SESSION['Institute'] = $op;
		}else{
			$_SESSION['error'] = "Incorrect Username or Password";
		}
		redirect(base_url('Institute'));
	}
}
