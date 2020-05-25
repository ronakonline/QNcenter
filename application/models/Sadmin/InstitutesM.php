<?php
class InstitutesM extends  CI_Model{

	private $table=null;
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table = 'institute';
	}

	public function  allinstitutes(){
		$q = $this->db->get($this->table);
		return $q->result();
	}

}
