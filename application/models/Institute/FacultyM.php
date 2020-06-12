<?php

class FacultyM extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public  function  insert($data){
		$data['aid'] = $_SESSION['Institute']->aid;
		$q = $this->db->insert('faculty',$data);
		return $q;
	}

	public function all(){
		$q = $this->db->where('aid',$_SESSION['Institute']->aid)->where('isdeleted',0)->get('faculty');
		return $q->result();
	}
}
