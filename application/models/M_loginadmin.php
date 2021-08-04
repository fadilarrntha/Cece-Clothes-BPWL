<?php 
class M_loginadmin extends CI_Model{	

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function get_user($username)
	{
		$this->db->where("username",$username);
		return $this->db->get("admin")->result_array()[0];
	}

}