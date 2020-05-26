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

	public function insert(){
		check_login_status();
		$data = $this->input->post();
		$data['aid'] = $_SESSION['Institute']->aid;
		$op = $this->StudentM->insert($data);
		if($op){
			$_SESSION['success'] = "Student Added";
		}else{
			$_SESSION['error'] = "Error Occurred";
		}
		$result = send_email_msg($data['email'],'student-email-template',$data);
		//print_r($result);
		redirect(base_url('Institute/Student/addstudent'));
	}

	public function allstudent(){
		check_login_status();
		$data['page']='allstudent';
		$data['title']='All Student';
		$this->load->view('Institute/index',$data);
	}
}

