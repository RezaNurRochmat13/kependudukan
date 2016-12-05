<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class kematian extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('model_kematian');
	}

	public function index(){
		$jumlah_data = $this->model_kematian->jumlah_data();
	    $config['base_url'] = base_url().'index.php/kematian/index/';
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
	    $data['kematian'] = $this->model_kematian->data($config['per_page'],$from);
		$this->load->view('view_kematian',$data);
	}

	public function tambahData(){
		if($this->input->post('submit')){
			$this->model_kematian->tambahData();
			$msg="<div class='alert alert-success'>Penambahan Data Kematian Berhasil</div>";
			$this->session->set_flashdata("msg",$msg);
			redirect('kematian/index');
		}

		$this->load->view('view_tambah_kematian');
	}

	public function edit($id){
		$where=array('id_kematian' => $id);
		$data['edit_kematian']=$this->model_kematian->edit_data($where,'kematian')->result();
		$this->load->view('view_ubah_kematian',$data);
	}

	public function update(){
		$id_kematian=$this->input->post('id_kematian');
		$nama_lengkap=$this->input->post('nama_lengkap');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_meninggal=$this->input->post('tanggal_meninggal');
		$tempat_meninggal=$this->input->post('tempat_meninggal');
		$umur_meninggal=($tanggal_lahir-$tanggal_meninggal);

		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal_lahir' => $tanggal_lahir,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_meninggal' => $tanggal_meninggal,
			'tempat_meninggal' => $tempat_meninggal,
			'umur_meninggal' => $umur_meninggal
			);

		$where=array(
			'id_kematian' => $id_kematian
			);
		
		$this->model_kematian->update_data($where,$data,'kematian');
		$msg1="<div class='alert alert-info'> Pengubahan Data Kematian Telah Berhasil</div>";
		$this->session->set_flashdata("msg1",$msg1);
		redirect('kematian/index');

	}


	public function delete($id){
		$where=array('id_kematian' => $id);
		$this->model_kematian->delete($where,'kematian');
		$msg2="<div class='alert alert-danger'>Penghapusan Data Kematian Telah Berhasil</div>";
		$this->session->set_flashdata("msg2",$msg2);
		redirect('kematian/index');
	}

	public function cariKematian(){
		$keyword=$this->input->post('keyword');
		$data['kematian']=$this->model_kematian->search($keyword);
		$this->load->view('view_kematian',$data);
	}
}




?>