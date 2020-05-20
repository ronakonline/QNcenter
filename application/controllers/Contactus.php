<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	public function index()
	{
        $data['title'] = "Contact Us";        
        $this->load->view('contact_us',$data);
	}
}