<?php

class Dashboard extends  CI_Controller{
	public  function  index(){
		check_login_status();
		$data['page'] = 'Dashboard';
		$data['title'] = 'Dashboard || QN-Center';
		$this->load->view('Institute/index', $data);
	}

	public function  verify(){
		$data['page'] = 'verify';
		$data['title'] = 'QN-Center';
		$this->load->view('Institute/index', $data);
	}
}
