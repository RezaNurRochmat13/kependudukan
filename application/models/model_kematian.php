<?php if(! defined('BASEPATH')) exit('No direct access allowed');
/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class model_kematian extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('kematian',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('kematian')->num_rows();
	}

	public function tambahData(){
		$id_kematian=$this->input->post('id_kematian');
		$nama_lengkap=$this->input->post('nama_lengkap');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_meninggal=$this->input->post('tanggal_meninggal');
		$tempat_meninggal=$this->input->post('tempat_meninggal');
		$umur_meninggal=($tanggal_lahir-$tanggal_meninggal);

		$data = array(
			'id_kematian' => $id_kematian,
			'nama_lengkap' => $nama_lengkap,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal_lahir' => $tanggal_lahir,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_meninggal' => $tanggal_meninggal,
			'tempat_meninggal' => $tempat_meninggal,
			'umur_meninggal' => $umur_meninggal
			);

		$this->db->insert('kematian',$data);
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
        $this->db->like('nama_lengkap',$keyword);
        $this->db->or_like('jenis_kelamin',$keyword);
        $this->db->or_like('umur_meninggal',$keyword);
        $this->db->or_like('tempat_meninggal',$keyword);
        $query  =   $this->db->get('kematian');
        return $query->result();
    }
}



?>