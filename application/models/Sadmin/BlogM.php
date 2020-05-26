<?php
class BlogM extends  CI_Model{

	private $table=null;
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table = 'blog';
	}

	public function  all(){
		$q = $this->db->get($this->table);
		return $q->result();
	}

	public function insert($data,$picture){
		$q = $this->db->query('insert into '.$this->table.' values(null,"'.addslashes($data['title']).'","'.$picture.'","'.$data['blog'].'",null,'.$data['category'].',now(),0)');
		return $q;
	}

}
