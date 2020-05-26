<?php

if(!function_exists('send_email_msg')){
	function send_email_msg($to,$template,$data=null){
		$ci = get_instance();
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'alonecoder1@gmail.com',
			'smtp_pass' => 'lvshagihoagqdmrp',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		);
		$ci->load->library('email', $config);
		$ci->email->set_newline("\r\n");


		$ci->email->from('alonecoder1@gmail.com', 'QN-Center');
		$ci->email->to($to);


		$ci->email->subject('Email Test');
		if($data!=null) {
			$ci->email->message($ci->load->view($template, $data, true));
		}else{
			$ci->email->message($ci->load->view($template, '', true));
		}

		$result = $ci->email->send();

		return $result;
	}
}
