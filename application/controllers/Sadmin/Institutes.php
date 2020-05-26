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

	public function action($fun, $id){
		check_sadmin_login_status();
		if($fun=='verify'){
			$op = $this->InstitutesM->verify($id);
			if($op){
				$_SESSION['success']="Account Verified";
			}else{
				$_SESSION['error']="Error Occurred";
			}

		}elseif ($fun=='delete'){
			$op = $this->InstitutesM->delete($id);
			if($op){
				$_SESSION['success']="Account Deleted";
			}else{
				$_SESSION['error']="Error Occurred";
			}
		}elseif ($fun=='ban'){
			$op = $this->InstitutesM->ban($id);
			if($op){
				$_SESSION['success']="Account Banned";
			}else{
				$_SESSION['error']="Error Occurred";
			}
		}
		redirect(base_url('Sadmin/Institutes'));
	}
}
