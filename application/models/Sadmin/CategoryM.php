<?php

class CategoryM extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function add($data){
		$op = $this->db->insert('category',$data);
		return $op;
	}
	function all(){
		$q = $this->db->get('category');
		return $q->result();
	}
}
