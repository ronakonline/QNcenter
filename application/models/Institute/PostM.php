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
		$q = $this->db->query('insert into '.$this->table.' values(null,'.$data['aid'].','.$data['did'].','.$data['cid'].',null,"'.addslashes($data['title']).'","'.addslashes($data['post']).'",0,now())');
		return $q;
	}

	function all(){
		$q = $this->db->query('SELECT notice.* , institute.name, department.name as dname, class.name as cname from notice, institute, department, class WHERE notice.isdeleted=0 and notice.aid=institute.aid AND notice.did=department.did AND class.id=notice.cid AND notice.aid='.$_SESSION['Institute']->aid);
		
        return $q->result();

		// $q = $this->db->where('aid',$_SESSION['Institute']->aid)->get($this->table);
		// return $q->result();
	}
}
