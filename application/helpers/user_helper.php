<?php

if(!function_exists('usererrormsg')){
	function usererrormsg(){
		if(isset($_SESSION['error'])){
			$q =  "<script>alertify.error('".$_SESSION['error']."');</script>";
			unset($_SESSION['error']);
			return $q;
		}
	}
}
if(!function_exists('usersuccessmsg')){
	function usersuccessmsg(){
		if(isset($_SESSION['success'])){
			$q =  "<script>alertify.success('".$_SESSION['success']."');</script>";
			unset($_SESSION['success']);
			return $q;
		}
	}
}

if(!function_exists('check_userlogin_status')){
	function check_userlogin_status(){
		if(isset($_SESSION['User'])){
			return 1;
		}else{
			redirect('User/Login');
		}
	}
}

// if(!function_exists('department_list')){
// 	function department_list(){
// 		$ci = get_instance();
// 		$ci->load->model('Institute/DepartmentM');
// 		$departments = $ci->DepartmentM->all();
// 		return $departments;
// 	}
// }
