<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User/PostM');
    }

	public function index($id){
		check_userlogin_status();
        $data['title']='Posts || QN-Center';
        $data['post'] = $this->PostM->posts($id);
        $this->load->view('User/posts',$data);
	}

    public function single_post($id){
        check_userlogin_status();
        $data['title']='Single Post || QN-Center';
        $data['post'] = $this->PostM->post($id);
        //echo $data['post'][0]->nid;
        $data['views'] = $this->PostM->view($id);
       // echo $data['views'];
		$data['comments'] = $this->PostM->comments($id);
        $this->load->view('User/post',$data);
    }
	
}
