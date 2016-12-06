<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class user extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('model_user');
	}

	public function index(){
		$jumlah_data = $this->model_user->jumlah_data();
	    $config['base_url'] = base_url().'index.php/user/index/';
	    $config['total_rows'] = $jumlah_data;
	    $config['per_page'] = 5;
	    $from = $this->uri->segment(3);

	    //Konfigurasi pagination bootrap
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = true;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '&laquo';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '&raquo';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';

	    $this->pagination->initialize($config);   
	    $data['user'] = $this->model_user->data($config['per_page'],$from);
		$this->load->view('view_user',$data);
	}

	public function tambahData(){
		if($this->input->post('submit')){
			$this->model_user->tambahData();
			$msg="<div class='alert alert-success'>Penambahan User Baru Berhasil</div>";
			$this->session->set_flashdata("msg",$msg);
			redirect('user/index');
		}
	}

	public function edit($id){
		$where=array('id_user' => $id);
		$data['edit_user']=$this->model_user->edit_data($where,'user')->result();
		$this->load->view('view_ubah_user',$data);
	}

	public function update(){
		$id_user=$this->input->post('id_user');
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => MD5($password)
			);

		$where = array(
			'id_user' =>$id_user
			);

		$this->model_user->update_data($where,$data,'user');
		$msg1="<div class='alert alert-info'>Pengubahan Data User Berhasil</div>";
		$this->session->set_flashdata("msg1",$msg1);
		redirect('user/index');
	}

	public function delete($id){
		$where=array('id_user' => $id);
		$this->model_user->delete($where,'user');
		$msg2="<div class='alert alert-danger'>Penghapusan Data User Berhasil</div>";
		$this->session->set_flashdata("msg2",$msg2);
		redirect('user/index');
	}

}

?>