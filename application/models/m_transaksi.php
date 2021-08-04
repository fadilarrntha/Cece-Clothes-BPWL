<?php 

class m_transaksi extends CI_Model {
	public function bayar($data)
	{
		$this->db->insert("pembayaran",$data);

		$this->db->set("status","dibayar");
		$this->db->where("id_users",$data['id_users']);
		$this->db->update("transaksi");
	}
}