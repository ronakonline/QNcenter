<?php

class Profile extends  CI_Controller{
	public  function  index(){
		check_login_status();
		$data['page'] = 'institute_profile';
		$data['title'] = 'Profile || QN-Center';
		$this->load->view('Institute/index', $data);
	}
}
