<?php 
class Model_product extends CI_Model {

     public function tampil_data($kategori = null)
     {
     	if ($kategori == null) {
        	return $this->db->get('product');	
     	} else {
     		$this->db->where('kategori', $kategori);
     		return $this->db->get('product');	
     	}
     }
     public function tambah($product)
     {
     	return $this->db->insert('product', $product);
     }

     public function search($keyword)
     {
          $this->db->like("nama_product",$keyword);
          return $this->db->get("product");
     }

     public function edit ($id){
          $query = $this->db->get_where('product', array('id_product' => $id));
          return $query->result_array();
     }

     public function update($id, $data){
          $this->db->where('id_product', $id);
          $this->db->update('product', $data);
     }
}