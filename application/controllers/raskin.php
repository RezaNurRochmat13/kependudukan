<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class raskin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('model_raskin');
	}

	public function index(){
		$jumlah_data = $this->model_raskin->jumlah_data();
	    $config['base_url'] = base_url().'index.php/raskin/index/';
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
	    $data['raskin'] = $this->model_raskin->data($config['per_page'],$from);
		$this->load->view('view_raskin',$data);
	}

	public function tambahData(){
		if($this->input->post('submit')){
			$this->model_raskin->tambahData();
			$msg = "<div class='alert alert-success'> Penambahan Data Raskin Telah Berhasil</div>";
			$this->session->set_flashdata("msg",$msg);
			redirect('raskin/index');
		}

		$this->load->view('view_tambah_raskin');
	}

	public function edit($id){
		$where=array('id_penerima' => $id);
		$data['edit_raskin']=$this->model_raskin->edit_data($where,'raskin')->result();
		$this->load->view('view_ubah_raskin',$data);
	}

	public function update(){
		$id_penerima=$this->input->post('id_penerima');
		$nama_kepala_keluarga=$this->input->post('nama_kepala_keluarga');
		$status_bayar=$this->input->post('status_bayar');

		$data = array(
			'nama_kepala_keluarga' => $nama_kepala_keluarga,
			'status_bayar' => $status_bayar
			);

		$where = array(
			'id_penerima' => $id_penerima
			);

		$this->model_raskin->update_data($where,$data,'raskin');
		$msg1="<div class='alert alert-info'>Pengubahan Data Raskin Telah Berhasil</div>";
		$this->session->set_flashdata("msg1",$msg1);
		redirect('raskin/index');
	}

	public function delete($id){
		$where=array('id_penerima' => $id);
		$this->model_raskin->delete($where,'raskin');
		$msg2="<div class='alert alert-danger'>Penghapusan Data Raskin Telah Berhasil</div>";
		$this->session->set_flashdata("msg2",$msg2);
		redirect('raskin/index');
	}

	public function cariRaskin(){
		$keyword=$this->input->post('keyword');
		$data['raskin']=$this->model_raskin->search($keyword);
		$this->load->view('view_raskin',$data);
	}
}



?>