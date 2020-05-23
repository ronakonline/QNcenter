<?php

class User extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute/UserM');
	}

	public function  index(){
		if(isset($_SESSION['institute'])){
			redirect(base_url('Institute'));
		}
		$this->load->view('Institute/login');
	}
	public  function  logout(){
		session_destroy();
		redirect(base_url('Institute/login'));
	}
	public  function  login(){
		$data = $this->input->post();
		$op = $this->UserM->checklogin($data);
		if($op!=false){
			session_destroy();
			$_SESSION['Institute'] = $op;
		}else{
			$_SESSION['error'] = "Incorrect Username or Password";
		}
		redirect(base_url('Institute'));
	}

	public function register(){
		//$data['page']='register';
		$data['title']='Register';
		$this->load->view('register',$data);
	}

	public  function register_institute(){
		$data = $this->input->post();
		$data['created']= date('Y-m-d H:i:s');
		$data['verification_code'] = random_string('alnum', 16);
		$_SESSION['iemail'] = $data['email'];
		$_SESSION['verification_code'] = $data['verification_code'];

		//Sending Verification Email

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'alonecoder1@gmail.com',
			'smtp_pass' => 'lvshagihoagqdmrp',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");


		$this->email->from('alonecoder1@gmail.com', 'QN-Center');
		$this->email->to($data['email']);


		$this->email->subject('Email Test');
		$message = "Thank you for choosing QN-Center <br> you can verify your email by click this <a href='".base_url('User/verifyemail/').$data['email']."/".$data['verification_code']."'>Here</a>";
		$this->email->message($message);

		$result = $this->email->send();

		//Inserting Data into database
		$this->UserM->add_institute($data);
		redirect(base_url('Institute/User/verify'));
	}

	public function  verify(){
		if(isset($_SESSION['iemail'])){
			$data['title'] = "Verify || QN-Center";
			$this->load->view('verify',$data);
		}else{
			redirect(base_url('Institute/register'));
		}

	}

	public function adduser(){
		check_login_status();
		$data['page']='adduser';
		$data['title']='Add User';
		$this->load->view('Institute/index',$data);
	}

	public function alluser(){
		check_login_status();
		$data['page']='alluser';
		$data['title']='All User';
		$this->load->view('Institute/index',$data);
	}

	public function checkemail(){
		$op = $this->UserM->checkemail($_POST['email']);
		if(count($op)>=1){
			echo 1;
		}
	}

	public function resendmail(){
		if($_SESSION['iemail'] && $_SESSION['verification_code']){
			//Sending Verification Email

			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'alonecoder1@gmail.com',
				'smtp_pass' => 'lvshagihoagqdmrp',
				'mailtype'  => 'html',
				'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");


			$this->email->from('alonecoder1@gmail.com', 'QN-Center');
			$this->email->to($_SESSION['iemail']);


			$this->email->subject('Email Test');
			$message = "Thank you for choosing QN-Center <br> you can verify your email by click this <a href='".base_url('User/verifyemail/').$_SESSION['iemail']."/".$_SESSION['verification_code']."'>Here</a>";
			$this->email->message($message);

			$result = $this->email->send();
			redirect(base_url('Institute/User/verify'));
		}else{
			redirect(base_url('Institute/User'));
		}
	}

	public function  verifyemail(){
		$email =  $this->uri->segment(3);
		$verification_code = $this->uri->segment(4);
		$data = $this->UserM->verifyemail($email,$verification_code);
		if($data[0]>=1){
			$_SESSION['success']='Registration Complete';
		}elseif(count($data[1])>=1){
			$_SESSION['success']='Already Verified Login';
		}else{
			$_SESSION['error']='Error Occurred in Registration';
		}
		//print_r($data);
		redirect(base_url('Institute'));
	}
}
