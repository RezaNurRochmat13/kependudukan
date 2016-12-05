<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.iluv2code.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		if($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
		} else {
			redirect('view_login','refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login/index','refresh');
	}

	public function dashboard(){
		$this->load->view('dashboard');
	}
}




?>