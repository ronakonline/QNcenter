<?php

class Faculty extends CI_Controller{
	
	public function __construct()
	{
			parent::__construct();
			$this->load->model('Institute/FacultyM');
	}

	public function addfaculty(){
		check_login_status();
		$data['page'] = 'addfaculty';
		$data['title'] = 'Add Faculty';
		$this->load->view('Institute/index',$data);
	}

	public  function  insert(){
		$data = $this->input->post();
		$op = $this->FacultyM->insert($data);
		if($op){
			$_SESSION['success'] = "Faculty Added";
		}else{
			$_SESSION['error']= 'error occurred';
		}
		redirect(base_url('Institute/Faculty/addfaculty'));
	}

	public function allfaculty(){
		check_login_status();
		$data['faculty'] = $this->FacultyM->all();
		$data['title'] = 'All Faculty';
		$data['page'] = 'allfaculty';
		$this->load->view('Institute/index',$data);
	}

	public function editfaculty(){
		check_login_status();
		$data['page']='editfaculty';
		$data['title']='Edit Faculty';
		$this->load->view('Institute/index',$data);
	}

	public function deletefaculty($id){
		check_login_status();
		$op= $this->db->where('id',$id)->update('faculty',array('isdeleted'=>1));
			if($op==1){
				$_SESSION['success'] = "Deleted Successfully";
			}else{
				$_SESSION['error'] = "Error Deleting";
			}
		redirect('Institute/Faculty/allfaculty');
	}
}
