<?php

class PostM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	

	public  function posts(){
		$q = $this->db->where('aid',$_SESSION['User']->aid)->where('cid',$_SESSION['User']->class)->get('notice');
		return $q->result();
	}
}
