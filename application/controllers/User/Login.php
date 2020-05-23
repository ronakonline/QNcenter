<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User/UserM');
    }

	public function index(){            
            $this->load->view('login');
	}

    public  function  logout(){
        session_destroy();
        redirect(base_url('User/Login'));
    }

    public  function  login(){
        $data = $this->input->post();
        $op = $this->UserM->checklogin($data);
        if($op!=false){
            $_SESSION['User'] = $op;
        }else{
            $_SESSION['error'] = "Incorrect Username or Password";
        }
        redirect(base_url('User'));
    }

}
