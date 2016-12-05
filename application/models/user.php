<?php if(!defined('BASEPATH')) exit('No direct access allowed');

/*
Programmed By: Reza Nur Rochmat
Developed By KOMSI UGM
Source www.iluv2code.com
CodeIgniter Framework
Copyright 2016. All Right Reserved
*/

class user extends CI_Model{

  function login($username, $password){

   $this->db->select('id_user, username, password');
   $this->db->from('user');
   $this->db->where('username', $username);
   $this->db->where('password', MD5($password));
   $this->db->limit(1);
 
   $query = $this->db-> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
  }
  ?>
