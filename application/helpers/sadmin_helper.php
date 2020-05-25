<?php


if(!function_exists('check_sadmin_login_status')){
	function check_sadmin_login_status(){
		if(isset($_SESSION['Sadmin'])){
			return;
		}else{
			redirect('Sadmin/login');
		}
	}
}
