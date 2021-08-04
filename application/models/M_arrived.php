<?php 

class M_arrived extends CI_Model {
	public function konfirmasi($id_users)
	{
		$id_transaksi = $this->M_konfirmasi->get_id_transaksi($id_users);

		$this->db->where("id_users",$id_users);
		$this->db->delete("transaksi");

		$this->db->where("id_users",$id_users);
		$this->db->delete("pembayaran");

		$this->db->where("id_transaksi",$id_transaksi);
		$this->db->delete("item");
	}
}