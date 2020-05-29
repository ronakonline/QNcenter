<?php
class BlogM extends  CI_Model{

	private $table=null;
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		// $this->table = 'category';
	}

	public function categories(){
		$q = $this->db->get('category');
		return $q->result();
	}

	public function  all($data){
		$q = $this->db->where('author',$data['aid'])->get('category');
		// $q = $this->db->get($this->table);
		return $q->result();
	}

	public function insert($data,$picture){
		$q = $this->db->query('insert into '.$this->table.' values(null,"'.addslashes($data['title']).'","'.$picture.'","'.$data['blog'].'",'.$data['aid'].','.$data['category'].',now(),0)');
		return $q;
	}

	public function bloglist($id){
		$q = $this->db->query('SELECT blog.`id`, blog.`title`, blog.`banner`, blog.`blog`, institute.`name`, category.category, blog.`created` FROM `blog`,institute,category WHERE blog.author=institute.aid AND blog.category=category.id AND blog.category ='.$id);
		return $q->result();
	}
}