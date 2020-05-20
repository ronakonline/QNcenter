<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Login extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['user'])){
            redirect('dashboard');
        }
        
        $data=[];
        if(isset($_SESSION['error'])){
            $data['error'] = $_SESSION['error'];
            unset($_SESSION['error']);
        }
        else{
            $data['error'] = "NO_ERROR";
        }

        $data['title'] = "User Login";        
        $this->load->view('login',$data);
	}

  public function checklogin(){
        if(isset($_POST)){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $query = $this->db->query("SELECT * FROM `users` WHERE `username`='$username' AND `password` ='$password'");
            
            
            
            if($query->num_rows()){
                //Correct
                $result = $query->result_array();
                //echo "<pre>";
                //print_r($result);die();
                //$this->session->set_userdata('admin',$result[0]['aid']);
                $_SESSION['user'] = $result[0]['uid'];
                redirect('dashboard');
            }
            else{
                $this->load->library('session');
                $this->session->set_flashdata('error','Incorrect Entries');
                redirect('login');
            }
        }
        else{
            die("Invalid Input");
        }
    }
    
    public function logout(){
        session_destroy();
        redirect('login');
    }
}
