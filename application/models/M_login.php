<?php 
class M_login extends CI_Model{

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function get_user($username)
	{
		$this->db->where("username",$username);
		return $this->db->get("users")->result_array()[0];
	}

	function daftar($data)
	{
		$this->db->insert('users',$data);
	}


}