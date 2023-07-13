<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->form_validation->set_rules('email','Email id','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->load->model('Login_Model');
			$validate=$this->Login_Model->index($email,$password);
			// echo $validate;
			if ($validate){
				$this->session->set_userdata('uid',$validate->id);
				$this->session->set_userdata('fname',$validate->FirstName);
				$this->session->set_userdata('lname',$validate->LastName);
				redirect('home');
			}else{
				$this->session->set_flashdata('error',"Invalid Login Details,Try Again!");
				redirect('login');
			}
		}else{
			$this->load->view('login');	
			}
			// 	$pwd = $this->input->post("password");
			// 	$userdata = $this->data_model->fetch("Email = '{$username}'");
		
			// if(!empty($userdata)){
			// 	if($userdata[Password]) == $pwd){
			// 		$this->session->set_userdata('userID',$donorBoard['mbd_id']);
            //   		$this->session->set_userdata('userType',0);
            //   		$this->session->set_userdata("adminName",$donorBoard['mbd_name']);
            //   		$this->session->set_userdata("userEmail",$donorBoard['mbd_email']);
            //   		$this->session->set_userdata("typeofuser",$donorBoard['mbd_type']);
			// 	}
			// }
		
	}


	// public function index(){
	// 	$this->form_validation->set_rules('email','Email id','required|valid_email');
	// 	$this->form_validation->set_rules('password','Password','required');
	// 	if($this->form_validation->run()){

	// 	}
	// }
	
}