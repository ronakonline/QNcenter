<?php

class UserM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function  checklogin($data){
		$q = $this->db->where('email',$data['username'])->where('password',$data['password'])->where('isdeleted',0)->get('faculty');
		if($q->num_rows()){
			return $q->row();
		}else{
			return false;
		}
	}

	public function  add_institute($data){
		$q = $this->db->query("insert into institute(aid,name,email,password,verification_code) values(null,'".$data['iname']."','".$data['email']."','".$data['password']."','".$data['verification_code']."')");
		return $q;
	}
	public function checkemail($email){
		$q = $this->db->where('email',$email)->get('institute');
		return $q->result();
	}

	public function verifyemail($email,$vcode){
		$verified = $this->db->where('email',$email)->where('verification_code',$vcode)->where('everified',1)->get('institute');
		$this->db->set('everified',1);
		$this->db->where('email',$email)->where('verification_code',$vcode);
		$this->db->update('institute');
		return array($op = $this->db->affected_rows() ,$v = $verified->result());
	}

	public function everified($email){
		$q = $this->db->where('email',$email)->where('everified',1)->get('institute');
		return $q->result();
	}
}
