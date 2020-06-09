<?php

class Post extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute/PostM');
	}

	public function addpost(){
		check_login_status();
		$data['page']='addpost';
		$data['title']='Add Post';
		$this->load->view('Institute/index',$data);
	}

	public function allpost(){
		check_login_status();
		$data['page']='allpost';
		$data['title']='All Posts';
		$data['posts'] = $this->PostM->all();
		$this->load->view('Institute/index',$data);
	}

	public  function  insert(){
		check_login_status();
		$data = $this->input->post();
		$data['aid'] = $_SESSION['Institute']->aid;

		$op = $this->PostM->insert($data);
		if($op){
			$_SESSION['success']="Post Created";
		}else{
			$_SESSION['error']="Error Occurred";
		}
		redirect('Institute/Post/addpost');
	}


	public function editpost(){
		check_login_status();
		$data['page']='editpost';
		$data['title']='Edit Post';
		$this->load->view('Institute/index',$data);
	}
}
