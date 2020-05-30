<?php

class UserM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function  checklogin($data){
		$q = $this->db->where('email',$data['email'])->where('password',$data['password'])->get('users');
		if($q->num_rows()){
			return $q->row();
		}else{
			return false;
		}
	}

	public  function subscribed_institutes(){
		$q = $this->db->where('aid',$_SESSION['User']->aid)->get('institute');
		return $q->result();
	}
}
