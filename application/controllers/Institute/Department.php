<?php

class Department extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute/DepartmentM');
	}

	public function index(){}

	public function  adddepartment(){
		check_login_status();
		$data['page']='adddepartment';
		$data['title']='Add Department';
		$this->load->view('Institute/index',$data);
	}

	public function insert(){
		$data = $this->input->post();
		$data['aid'] = $_SESSION['Institute']->aid;
		$data['created']= date('Y-m-d H:i:s');
		//print_r($data);
		$op = $this->DepartmentM->add($data);
		if($op){
			$_SESSION['success'] = "Inserted Successfully";
		}else{
			$_SESSION['error'] = "Error Inserting";
		}
		redirect(base_url('Institute/Department/adddepartment'));
	}

	public function alldepartment(){
		check_login_status();
		$data['page']='alldepartment';
		$data['title']='All Department';
		$data['departments'] = $this->DepartmentM->all();
		$this->load->view('Institute/index',$data);
	}

	public function editdepartment(){
		check_login_status();
		$data['page']='editdepartment';
		$data['title']='Edit Department';
		$this->load->view('Institute/index',$data);
	}

	public function deletedepartment($id){
		check_login_status();
		$op= $this->db->where('did',$id)->update('department',array('isdeleted'=>1));
			if($op==1){
				$_SESSION['success'] = "Deleted Successfully";
			}else{
				$_SESSION['error'] = "Error Deleting";
			}
		redirect('Institute/Department/alldepartment');
	}

	
}
