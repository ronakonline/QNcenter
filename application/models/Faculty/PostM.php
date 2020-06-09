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
		$q = $this->db->query('insert into '.$this->table.' values(null,'.$data['aid'].','.$data['did'].','.$data['cid'].','.$data['uid'].',"'.addslashes($data['title']).'","'.addslashes($data['post']).'",0,now())');
		return $q;
	}

	function all(){
		$q = $this->db->where('aid',$_SESSION['Faculty']->aid)->where('did',$_SESSION['Faculty']->department)->where('uid',$_SESSION['Faculty']->id)->get($this->table);
		return $q->result();
	}

	function allclasses(){
		$q = $this->db->where('did',$_SESSION['Faculty']->department)->get('class');
		return $q->result();
	}
}
