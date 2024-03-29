<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
        $data['title'] = "Blogs Categories || QN-Center";        
        $this->load->model('BlogM');
        $data['categories'] = $this->BlogM->categories();
        $this->load->view('blog_categories',$data);
	}

	public function BlogList($id){
		$data['title'] = "Blog List || QN-Center";        
        $this->load->model('BlogM');
        $data['bloglist'] = $this->BlogM->bloglist($id);
		$this->load->view('blogs',$data);	
	}

	public function single_blog($id){
		$data['title'] = "Blog || QN-Center";    
		$this->load->model('BlogM');
		$data['categories'] = $this->BlogM->categories();
        $data['blogdetail'] = $this->BlogM->blog_detail($id);

		$this->load->view('blog_single',$data);
	}
}