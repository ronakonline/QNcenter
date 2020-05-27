<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
        $data['title'] = "Blogs";        
        $this->load->model('BlogM');
        $data['categories'] = $this->BlogM->categories();
        $this->load->view('blog_categories',$data);
	}
}