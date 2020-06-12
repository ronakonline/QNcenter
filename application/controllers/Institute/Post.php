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
		//echo 'hi'.$_SERVER['CONTENT_LENGTH'];
		if($_SERVER['CONTENT_LENGTH']>102400){
			$_SESSION['error']="File must be less than 10MB";
			redirect('Institute/Post/addpost');
		}
		if($_FILES['attachment']['error']==0){
			if($_FILES['attachment']['size']>102400){
				$_SESSION['error']="File must be less than 10MB";
				redirect('Institute/Post/addpost');
			}else{
				$name = time() . $_FILES['attachment']['name'];
				$path =  'uploads/attachment/'.$name;
				if(!move_uploaded_file($_FILES['attachment']['tmp_name'],$path)) {
					$_SESSION['error'] = "Error occurred in file upload";
					redirect('Institute/Post/addpost');
				}
			}
		}
		$data = $this->input->post();
		$data['aid'] = $_SESSION['Institute']->aid;

		$op = $this->PostM->insert($data);
		$notice = $this->db->insert_id();
		$this->db->insert('attachments',array('notice' => $notice , 'attachment' => $name));
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
