<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class model_catatan extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('catatan',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('catatan')->num_rows();
	}

	public function tambahData(){
		$id_catatan=$this->input->post('id_catatan');
		$nama_catatan=$this->input->post('nama_catatan');
		$keterangan_catatan=$this->input->post('keterangan_catatan');

		$data= array(
			'id_catatan' => $id_catatan,
			'nama_catatan' => $nama_catatan,
			'keterangan_catatan' => $keterangan_catatan
			);

		$this->db->insert('catatan',$data);
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

	function search($keyword){
    	$this->db->select('*');
        $this->db->like('nama_catatan',$keyword);
        $this->db->or_like('keterangan_catatan',$keyword);
        $query  =   $this->db->get('catatan');
        return $query->result();
    }
}



?>