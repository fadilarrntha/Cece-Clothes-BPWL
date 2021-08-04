<?php 

class M_konfirmasi extends CI_Model {
	public function tampil()
	{
		$this->db->where("status","dibayar");
		return $this->db->get("transaksi")->result();
	}

	public function getuser($id_users)
	{
		$this->db->where("id_users",$id_users);
		return $this->db->get("users")->result();
	}

	public function getproduk($id_product)
	{
		$this->db->where("id_product",$id_product);
		return $this->db->get("product")->result()[0];
	}

	public function get_total($id_transaksi)
	{
		$this->db->where("id_transaksi",$id_transaksi);
		$get = $this->db->get("item")->result();
		$total = 0;
		foreach ($get as $row) {
			$getproduk = $this->getproduk($row->id_product);
			$total += $getproduk->harga_product;
		}

		return $total;
	}

	public function get_detail_user($id_users)
	{
		$this->db->where("id_users",$id_users);
		return $this->db->get("pembayaran")->result()[0];
	}

	public function get_id_transaksi($id_users)
	{
		$this->db->where("id_users",$id_users);
		$get = $this->db->get("transaksi")->result()[0];
		return $get->id_transaksi;
	}

	public function get_items($id_users)
	{
		$this->db->where("id_users",$id_users);
		$get = $this->db->get("transaksi")->result()[0];
		$id_transaksi = $get->id_transaksi;

		$this->db->where("id_transaksi",$id_transaksi);
		return $this->db->get("item")->result();
	}

	public function konfirmasi($id_users)
	{
		$this->db->where("id_users",$id_users);
		$this->db->set("status","proses");
		$this->db->update("transaksi");
	}
}