<?php

class StudentM extends CI_Model{
	private $table = 'null';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table='users';
	}

	function insert($data){
		//print_r($data);
		$q = $this->db->insert($this->table,$data);
		return $q;
	}

	function  all(){
		$this->db->select('users.uid as id,users.name as name, department.name as dname, class.name as cname,users.email as email,users.enrollment_no as eno');
		$this->db->from('users');
		$this->db->where('users.aid',$_SESSION['Faculty']->aid);
		$this->db->join('department','users.department=department.did');
		$this->db->join('class','users.class=class.id');
		$q = $this->db->get();
		return $q->result();
	}

	function import_excel($data){
		$q = $this->db->insert_batch('users',$data);
		return $q;
	}
}
