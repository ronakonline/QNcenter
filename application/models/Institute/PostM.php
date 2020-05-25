<?php

class PostM extends CI_Model{
	private $table = "null";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table = "notice";
	}

	public function insert($data){
		$q = $this->db->query('insert into '.$this->table.' values(null,'.$data['aid'].','.$data['did'].','.$data['cid'].',null,"'.addslashes($data['title']).'","'.addslashes($data['post']).'",now())');
		return $q;
	}

	function all(){
		$q = $this->db->where('aid',$_SESSION['Institute']->aid)->get($this->table);
		return $q->result();
	}
}
