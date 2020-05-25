<?php

class Dashboard extends  CI_Controller{
	public  function  index(){
		check_sadmin_login_status();
		$data['page'] = 'Dashboard';
		$this->load->view('Sadmin/index', $data);
	}
}
