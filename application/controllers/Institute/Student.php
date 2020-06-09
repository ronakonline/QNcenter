<?php

class Student extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute/StudentM');
	}

	public function addstudent()
	{
		check_login_status();
		$data['page'] = 'addstudent';
		$data['title'] = 'Add Student';
		$this->load->view('Institute/index', $data);
	}

	public function insert()
	{
		check_login_status();
		$data = $this->input->post();
		$data['aid'] = $_SESSION['Institute']->aid;
		$op = $this->StudentM->insert($data);
		if ($op) {
			$_SESSION['success'] = "Student Added";
		} else {
			$_SESSION['error'] = "Error Occurred";
		}
		$result = send_email_msg($data['email'], 'student-email-template', $data);
		//print_r($result);
		redirect(base_url('Institute/Student/addstudent'));
	}

	public function allstudent()
	{
		check_login_status();
		$data['page'] = 'allstudent';
		$data['title'] = 'All Student';
		$data['students'] = $this->StudentM->all();
		//print_r($data['students']);
		$this->load->view('Institute/index', $data);
	}

	public function editstudent(){
		check_login_status();
		$data['page']='editstudent';
		$data['title']='Edit Student';
		$this->load->view('Institute/index',$data);
	}

	public function import_excel()
	{
		check_login_status();
		$data['page'] = 'import_excel';
		$data['title'] = 'Import Excel';
		$this->load->view('Institute/index', $data);
	}

	public function import()
	{
		$file = $_FILES['file']['tmp_name'];
		//echo $_FILES['file']['type'];
		if (pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION) != "csv") {
			$_SESSION['error'] = "CSV File Only";
			redirect(base_url('Institute/Student/import_excel'));
		}
		$handle = fopen($file, "r");
		$c = 0;//
		while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
			if ($c != 0) {
				$enrollement_no = $filesop[0];
				$name = $filesop[1];
				$email = $filesop[2];
				$phonenumber = $filesop[3];
				$password = $filesop[4];
				$data[] = array(
					'aid' => $_SESSION['Institute']->aid,
					'department' => $_POST['department'],
					'class' => $_POST['class'],
					'enrollment_no' => $enrollement_no,
					'name' => $name,
					'email' => $email,
					'phonenumber' => $phonenumber,
					'password' => $password,
				);
			}
			$c = $c + 1;
		}


		$op = $this->StudentM->import_excel($data);

		if ($op) {
			$_SESSION['success'] = "Imported Successfully";
		} else {
			$_SESSION['error'] = "Error Importing";
		}
		redirect(base_url('Institute/Student/import_excel'));
	}
}

