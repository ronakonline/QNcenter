<?php

class PostM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	

	public  function posts($id){
		$this->db->select('notice.*,institute.name as institute');
        $this->db->from('notice');
        $this->db->where('notice.aid',$id)->where('notice.cid',$_SESSION['User']->class);
        $this->db->join('institute','notice.aid=institute.aid');
        $this->db->order_by("created_at", "desc");
        $q = $this->db->get();
        return $q->result();
	}

	public  function post($id){
		$this->db->select('notice.*,institute.name as institute');
        $this->db->from('notice');
        $this->db->where('notice.aid',$_SESSION['User']->aid)->where('notice.cid',$_SESSION['User']->class)->where('notice.nid',$id);
        $this->db->join('institute','notice.aid=institute.aid');
        // $this->db->order_by("created_at", "desc");
        $q = $this->db->get();
        return $q->result();
	}
}
