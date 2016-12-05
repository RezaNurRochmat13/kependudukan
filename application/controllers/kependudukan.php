<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class kependudukan extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('model_kependudukan');
	}

	public function index(){
		$jumlah_data = $this->model_kependudukan->jumlah_data();
	    $config['base_url'] = base_url().'index.php/kependudukan/index/';
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
	    $data['kependudukan'] = $this->model_kependudukan->data($config['per_page'],$from);
		$this->load->view('view_kependudukan',$data);
	}

	public function tambahData(){
		if($this->input->post('submit')){
			$this->model_kependudukan->tambahData();
			$msg="<div class='alert alet-success'>Penambahan Data Kependudukan Berhasil</div>";
			$this->session->set_flashdata("msg",$msg);
			redirect('kependudukan/index');
		}

		$this->load->view('view_tambah_kependudukan');
	}

	public function edit($id){
		$where=array('id_umum' => $id);
		$data['penduduk']=$this->model_kependudukan->edit_data($where,'umum')->result();
		$this->load->view('view_ubah_kependudukan',$data);
	}

	public function update(){
		$id_umum=$this->input->post('id_umum');
		$nama_lengkap=$this->input->post('nama_lengkap');
		$nomor_induk_kependudukan=$this->input->post('nomor_induk_kependudukan');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$agama=$this->input->post('agama');
		$jenjang_pendidikan=$this->input->post('jenjang_pendidikan');
		$pekerjaan=$this->input->post('pekerjaan');
		$nama_kepala_keluarga=$this->input->post('nama_kepala_keluarga');
		$status_perkawinan=$this->input->post('status_perkawinan');
		$hubungan_dalam_keluarga=$this->input->post('hubungan_dalam_keluarga');
		$kewarnegaraan=$this->input->post('kewarnegaraan');
		$nomor_paspor_kitap=$this->input->post('nomor_paspor_kitap');
		$nama_ayah=$this->input->post('nama_ayah');
		$nama_ibu=$this->input->post('nama_ibu');

		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'nomor_induk_kependudukan' => $nomor_induk_kependudukan,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'agama' => $agama,
			'jenjang_pendidikan' => $jenjang_pendidikan,
			'pekerjaan' => $pekerjaan,
			'nama_kepala_keluarga' => $nama_kepala_keluarga,
			'status_perkawinan' => $status_perkawinan,
			'hubungan_dalam_keluarga' => $hubungan_dalam_keluarga,
			'kewarnegaraan' => $kewarnegaraan,
			'nomor_paspor_kitap' => $nomor_paspor_kitap,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu
			);

		$where = array(
			'id_umum' => $id_umum
			);
		$this->model_kependudukan->update_data($where,$data,'umum');
		$msg1="<div class='alert alert-info'>Pengubahan Data Kependudukan Berhasil</div>";
		$this->session->set_flashdata("msg1",$msg1);
		redirect('kependudukan/index');
	}

	public function delete($id){
		$where=array('id_umum' => $id);
		$this->model_kependudukan->delete($where,'umum');
		$msg2="<div class='alert alert-danger'>Penghapusan Data Kependudukan Berhasil</div>";
		$this->session->set_flashdata("msg2",$msg2);
		redirect('kependudukan/index');
	}

	public function cariPenduduk(){
		$keyword=$this->input->post('keyword');
		$data['kependudukan']=$this->model_kependudukan->search($keyword);
		$this->load->view('view_kependudukan',$data);
	}
}




?>