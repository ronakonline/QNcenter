<?php

if(!function_exists('errormsg')){
	function errormsg(){
		if(isset($_SESSION['error'])){
			$q =  "<script>alertify.error('".$_SESSION['error']."');</script>";
			unset($_SESSION['error']);
			return $q;
		}
	}
}
if(!function_exists('successmsg')){
	function successmsg(){
		if(isset($_SESSION['success'])){
			$q =  "<script>alertify.success('".$_SESSION['success']."');</script>";
			unset($_SESSION['success']);
			return $q;
		}
	}
}

if(!function_exists('check_login_status')){
	function check_login_status(){
		if(isset($_SESSION['Institute'])){
			$ci = get_instance();
			$ci->load->model('Institute/UserM');
			$op = $ci->UserM->everified($_SESSION['Institute']->email);
			if(count($op)>=1) {
				return;
			}else{
				$_SESSION['iemail']=$_SESSION['Institute']->email;
				$_SESSION['verification_code']=$_SESSION['Institute']->verification_code;
				redirect(base_url('Institute/User/verify'));

			}
		}else{
			redirect('Institute/login');
		}
	}
}

if(!function_exists('department_list')){
	function department_list(){
		$ci = get_instance();
		$ci->load->model('Institute/DepartmentM');
		$departments = $ci->DepartmentM->all();
		return $departments;
	}
}
