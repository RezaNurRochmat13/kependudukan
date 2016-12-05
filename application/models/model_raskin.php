<?php if(!defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class model_raskin extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		return $query=$this->db->get('raskin',$number,$offset)->result();

	}

	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('raskin')->num_rows();
	}

	public function tambahData(){
		$id_penerima=$this->input->post('id_penerima');
		$nama_kepala_keluarga=$this->input->post('nama_kepala_keluarga');
		$status_bayar=$this->input->post('status_bayar');

		$data = array(
			'id_penerima' => $id_penerima,
			'nama_kepala_keluarga' => $nama_kepala_keluarga,
			'status_bayar' => $status_bayar
			);

		$this->db->insert('raskin',$data);
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
		$this->db->like('id_penerima',$keyword);
		$this->db->or_like('nama_kepala_keluarga',$keyword);
		$this->db->or_like('status_bayar',$keyword);
		$query=$this->db->get('raskin');
		return $query->result();
	}
}

?>