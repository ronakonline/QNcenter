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
		$q = $this->db->where('isdeleted',0)->get($this->table);
		return $q->result();
	}

	function verify($id){
		$q = $this->db->set('averified',1)->where('aid',$id)->update($this->table);
		return $q;
	}

	function delete($id){
		$q = $this->db->set('isdeleted',1)->where('aid',$id)->update($this->table);
		return $q;
	}

	function ban($id){
		$q = $this->db->set('averified',0)->where('aid',$id)->update($this->table);
		return $q;
	}

}
