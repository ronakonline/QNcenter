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
		$q = $this->db->where('aid',$_SESSION['Institute']->aid)->get('class');
		return $q->result();
	}
}
