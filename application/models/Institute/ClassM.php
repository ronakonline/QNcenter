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
}
