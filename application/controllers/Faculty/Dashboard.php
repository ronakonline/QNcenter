<?php

class Dashboard extends  CI_Controller{
	public  function  index(){
		check_faculty_login_status();
		$data['page'] = 'Dashboard';
		$data['title'] = 'Dashboard || QN-Center';
		$this->load->view('Faculty/index', $data);
	}

}
