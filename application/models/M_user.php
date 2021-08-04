<?php 
class M_user extends CI_Model {

     public function tampil_data($username = null)
     {
     	if ($username == null) {
        	return $this->db->get('users');	
     	} else {
     		$this->db->where('username', $username);
     		return $this->db->get('users');	
     	}
     }

     public function search($keyword)
     {
          $this->db->like("username",$keyword);
          return $this->db->get("users");
     }

     public function edit ($id){
          $query = $this->db->get_where('users', array('id_users' => $id));
          return $query->result_array();
     }

     public function update($id, $data){
          $this->db->where('id_users', $id);
          $this->db->update('users', $data);
     }
}