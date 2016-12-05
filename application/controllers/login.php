<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.iluv2code.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index(){
		if($this->session->userdata('logged_in'!==null)){
			redirect(site_url('home/dashboard'));
		}
		$this->load->view('view_login');
	}

}






?>