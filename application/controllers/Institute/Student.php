<?php

class Student extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute/StudentM');
	}

	public function addstudent(){
		check_login_status();
		$data['page']='addstudent';
		$data['title']='Add Student';
		$this->load->view('Institute/index',$data);
	}

	public function allstudent(){
		check_login_status();
		$data['page']='allstudent';
		$data['title']='All Student';
		$this->load->view('Institute/index',$data);
	}
}

