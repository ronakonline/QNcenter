<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute_list extends CI_Controller {

	public function index()
	{
        $data['title'] = "Instiute List";        
        $this->load->view('institute_list',$data);
	}
}