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
			return;
		}else{
			redirect('Institute/login');
		}
	}
}

