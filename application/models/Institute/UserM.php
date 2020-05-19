<?php

class UserM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function  checklogin($data){
		$q = $this->db->where('username',$data['username'])->where('password',$data['password'])->get('admin');
		if($q->num_rows()){
			return $q->row();
		}else{
			return false;
		}
	}
}
