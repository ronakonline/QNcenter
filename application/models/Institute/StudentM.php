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
		print_r($data);
		$q = $this->db->insert($this->table,$data);
		return $q;
	}
}
