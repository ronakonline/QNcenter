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

if(!function_exists('category_list')){
	function category_list(){
		$ci = get_instance();
		$ci->load->model('Sadmin/CategoryM');
		$categories = $ci->CategoryM->all();
		return $categories;
	}
}