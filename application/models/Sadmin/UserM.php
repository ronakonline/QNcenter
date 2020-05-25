<?php

class UserM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function  checklogin($data){
		$q = $this->db->where('email',$data['username'])->where('password',$data['password'])->get('sadmin');
		if($q->num_rows()){
			return $q->row();
		}else{
			return false;
		}
	}
}
