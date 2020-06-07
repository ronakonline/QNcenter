<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User/PostM');
    }

	public function index(){
		check_userlogin_status();
    	$data['title']='Post || QN-Center';
    	$data['post'] = $this->PostM->posts();
        $this->load->view('User/post',$data);
	}
	
}
