<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User/UserM');
    }

	public function index(){
		check_userlogin_status();
    	$data['title']='Home || QN-Center';
        $this->load->view('User/index',$data);
	}
	
}
