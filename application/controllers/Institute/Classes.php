<?php

class Classes extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute/ClassM');
	}

	public function index(){}

	public function  addclass(){
		check_login_status();
		$data['page']='addclass';
		$data['title']='Add Class';
		$this->load->view('Institute/index',$data);
	}

	public function insert(){
		$data = $this->input->post();
		//print_r($data);
		$op = $this->ClassM->add($data);
		if($op){
			$_SESSION['success'] = "Inserted Successfully";
		}else{
			$_SESSION['error'] = "Error Inserting";
		}
		redirect(base_url('Institute/Classes/addclass'));
	}

	public function allclass(){
		check_login_status();
		$data['page']='allclass';
		$data['title']='All Class';
		$data['classes'] = $this->ClassM->all();
		$this->load->view('Institute/index',$data);
	}

	public  function all_class_by_department(){
		$did = $_POST['did'];
		$classes = $this->ClassM->all_class_by_department($did);
		foreach ($classes as $row){
			echo '<option value="'.$row->id.'">'.$row->name.'</option>';
		}

	}

	public function editclass(){
		check_login_status();
		$data['page']='editclass';
		$data['title']='Edit Class';
		$this->load->view('Institute/index',$data);
	}
}
