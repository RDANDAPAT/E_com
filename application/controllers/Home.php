<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        // echo $this->session->userdata('email');
        if(!$this->session->userdata('uid'))
        redirect('login');
    }
    
    public function index()
	{
        // $this->data['title'] = "Home";
        $this->load->view('home');
	}
    // public function Register(){
    //     $this->data['title'] = "Registre";
    //     $this->load->view('admin/register');
    // }
    // public function home(){
    //     $this->data['title'] = "Home";
    //     $this->load->view('admin/home');
    // }
}
    

