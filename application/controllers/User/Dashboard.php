<?php

class Dashboard extends CI_Controller{
    public function index(){
        if($_SESSION['user']){
                $data['title']="Dashboard";
                 $this->load->view('dashboard',$data);
        }else{
            redirect('User/User_Login');
        }
    }
}