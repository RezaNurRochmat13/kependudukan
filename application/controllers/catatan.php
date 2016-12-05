<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/
class catatan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('model_catatan');

	}

	public function index(){
		$jumlah_data = $this->model_catatan->jumlah_data();
	    $config['base_url'] = base_url().'index.php/catatan/index/';
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
	    $data['catatan'] = $this->model_catatan->data($config['per_page'],$from);
		$this->load->view('view_catatan',$data);
	}

	public function tambahData(){
			if($this->input->post('submit')){
				$this->model_catatan->tambahData();
				$msg = "<div class='alert alert-success'> Penambahan Data Catatan Telah Berhasil</div>";
				$this->session->set_flashdata("msg",$msg);
				redirect('catatan/index');
		}
		$this->load->view('view_tambah_catatan');
	}

	public function edit($id){
		$where = array('id_catatan' => $id);
		$data['edit_catatan'] = $this->model_catatan->edit_data($where,'catatan')->result();
		$this->load->view('view_ubah_catatan',$data);
	}

	public function update(){
		$id_catatan = $this->input->post('id_catatan');
		$nama_catatan = $this->input->post('nama_catatan');
		$keterangan_catatan = $this->input->post('keterangan_catatan');

		$data = array(
			'nama_catatan' => $nama_catatan,
			'keterangan_catatan' =>$keterangan_catatan
			);

		$where = array(
			'id_catatan' => $id_catatan
			);
		$this->model_catatan->update_data($where,$data,'catatan');
		$msg1="<div class='alert alert-info'> Pengubahan Data Catatan Telah Berhasil</div>";
		$this->session->set_flashdata("msg1",$msg1);
		redirect('catatan/index');
	}

	public function delete($id){
		$where=array('id_catatan' =>$id);
		$this->model_catatan->delete($where,'catatan');
		$msg2="<div class='alert alert-danger'>Penghapusan Data Catatan Telah Berhasil</div>";
		$this->session->set_flashdata("msg2",$msg2);
		redirect('catatan/index');
	}

	public function cariCatatan(){
		$keyword=$this->input->post('keyword');
		$data['catatan']=$this->model_catatan->search($keyword);
		$this->load->view('view_catatan',$data);
	}

}




?>