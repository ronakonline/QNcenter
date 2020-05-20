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
		$this->load->view('Institute/index',$data);
	}
}
