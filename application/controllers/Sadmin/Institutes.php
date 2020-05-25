<?php

class Institutes extends  CI_Controller{
	public function __construct()
	{
			parent::__construct();
			$this->load->model('Sadmin/InstitutesM');

	}

	public function  index(){
		check_sadmin_login_status();
		$data['page']='institutes';
		$data['title'] = 'All Institutes';
		$data['institutes'] = $this->InstitutesM->allinstitutes();
		$this->load->view('Sadmin/index',$data);
	}
}
