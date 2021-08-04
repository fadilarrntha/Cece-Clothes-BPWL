<?php 
class M_cart extends CI_Model{

	function get_all_cart($id_users){
		$hasil = $this->db->where('id_users', $id_users);
		return $this->db->get('cart')->result();
	}

	function insert($product){
		return $this->db->insert('cart', $product);
	}

	public function checkout($id_users)
	{
		$data = [
			"id_users" => $id_users,
			"status" => "belum dibayar"
		];

		$this->db->insert("transaksi",$data);

		$this->db->order_by("id_transaksi","desc");
		$id_transaksi = $this->db->get("transaksi")->result_array()[0]['id_transaksi'];

		$cart = $this->get_all_cart($id_users);
		foreach ($cart as $cart) {
			$data = [
				"id_transaksi" => $id_transaksi,
				"id_product" => $cart->id_product
			];

			$this->db->insert("item",$data);
		}

		$this->db->where('id_users', $id_users);
		$this->db->delete('cart');
	}
}