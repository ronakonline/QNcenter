<?php

class Dashboard extends  CI_Controller{
	public  function  index(){
		check_userlogin_status();
		$data['page'] = 'Dashboard';
		$this->load->view('User/index', $data);
	}
}
