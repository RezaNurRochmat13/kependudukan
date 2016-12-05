<?php if(! defined('BASEPATH')) exit('Nr direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class model_kependudukan extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('umum',$number,$offset)->result();
	}

	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('umum')->num_rows();
	}

	public function tambahData(){
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
			'id_umum' => $id_umum,
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

		$this->db->insert('umum',$data);	
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function search($keyword){
		$this->db->select('*');
		$this->db->like('nama_kepala_keluarga',$keyword);
		$query = $this->db->get('umum');
		return $query->result();

	}
}




?>