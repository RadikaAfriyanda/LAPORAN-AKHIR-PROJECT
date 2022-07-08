<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Register extends CI_Controller {
        public function index(){
            $data = [];
            $this->load->view('register/index',$data);
        }
        
        public function save(){
            $this->load->model('users_model','users');
    
            $_username = $this->input->post('username');
            $_password = $this->input->post('password');
            $_email = $this->input->post('email');
    
            $data_user[]=$_username;// ? 1
            $data_user[]=$_password;// ? 2
            $data_user[]=$_email;// ? 3
    
            $this->users->save($data_user);          
    
            redirect(base_url().'index.php/login');
        }


}

            
            
        

