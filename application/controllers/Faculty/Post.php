<?php

class Post extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Faculty/PostM');
	}

	public function addpost(){
		check_faculty_login_status();
		$data['page']='addpost';
		$data['title']='Add Post';
		$data['classes'] = $this->PostM->allclasses();
		$this->load->view('Faculty/index',$data);
	}

	public function allpost(){
		check_faculty_login_status();
		$data['page']='allpost';
		$data['title']='All Posts';
		$data['posts'] = $this->PostM->all();
		$this->load->view('Faculty/index',$data);
	}

	public  function  insert(){
		check_faculty_login_status();
		$data = $this->input->post();
		$data['aid'] = $_SESSION['Faculty']->aid;
		$data['uid'] = $_SESSION['Faculty']->id;
		$data['did'] = $_SESSION['Faculty']->department;

		$op = $this->PostM->insert($data);
		if($op){
			$_SESSION['success']="Post Created";
		}else{
			$_SESSION['error']="Error Occurred";
		}
		redirect('Faculty/Post/addpost');
	}
}
