<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function index()
	{
        $data['title'] = "Courses";        
        $this->load->view('course_categories',$data);
	}
}