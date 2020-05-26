<?php

class ClassM extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function add($data){
		$op = $this->db->insert('class',$data);
		return $op;
	}
	function all(){
		$q = $this->db->query('select department.name as dname, class.name as cname,class.id from class,department where department.did=class.did and department.aid='.$_SESSION['Institute']->aid);
		return $q->result();
	}
	function  all_class_by_department($did){
		$this->db->select('class.name as name,class.id as id,department.aid as aid');
		$this->db->from('class');
		$this->db->where('department.aid',$_SESSION['Institute']->aid);
		$this->db->where('class.did',$did);
		$this->db->join('department','class.did=department.did');
		$q = $this->db->get();

		return $q->result();
	}
}
