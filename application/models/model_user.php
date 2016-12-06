<?php if(! defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.malasngoding.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class model_user extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		return $this->db->get('user',$number,$offset)->result();
	}

	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('user')->num_rows();
	}

	public function tambahData(){
		$id_user=$this->input->post('id_user');
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$data = array(
			'id_user' => $id_user,
			'username' => $username,
			'password' => MD5($password)
			);
		$this->db->insert('user',$data);
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
		$this->db->update($table);
	}
}


?>