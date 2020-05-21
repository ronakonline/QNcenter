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

	public function Register(){
		//$data['page']='register';
		$data['title']='Register';
		$this->load->view('register',$data);
	}

	public function adduser(){
		check_login_status();
		$data['page']='adduser';
		$data['title']='Add User';
		$this->load->view('Institute/index',$data);
	}

	public function alluser(){
		check_login_status();
		$data['page']='alluser';
		$data['title']='All User';
		$this->load->view('Institute/index',$data);
	}
}
