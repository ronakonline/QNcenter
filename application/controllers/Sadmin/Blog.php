<?php

class Blog extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sadmin/BlogM');
	}

	public function addblog(){
		check_sadmin_login_status();
		$data['page']='addblog';
		$data['title']='Add Blogs';
		$this->load->view('Sadmin/index',$data);
	}

	public function allblog(){
		check_sadmin_login_status();
		$data['page']='allblog';
		$data['title']='All Blogs';
		$data['blogs'] = $this->BlogM->all();
		$this->load->view('Sadmin/index',$data);
	}

	public  function  insert(){
		check_sadmin_login_status();
		$data = $this->input->post();

		$picture = $this->uploadimage($_FILES['banner'],"banner","blog");
		if($picture=="error"){
			$_SESSION['error']="Error Uploading Picture";
		}else{
			$op= $this->BlogM->insert($data,$picture);
			if($op==1){
				$_SESSION['success'] = "Inserted Successfully";
			}else{
				$_SESSION['error'] = "Error Updating";
			}
		}
		redirect('Sadmin/Blog/addblog');
	}

	public  function  uploadimage($img,$name,$dest){
		$config['upload_path'] = 'assets/images/'.$dest;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $img['name'];

		//Load upload library and initialize configuration
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if($this->upload->do_upload($name)){
			$uploadData = $this->upload->data();
			$picture = $uploadData['file_name'];
			return $picture;
		}else{
			return "error";
		}
	}
}
