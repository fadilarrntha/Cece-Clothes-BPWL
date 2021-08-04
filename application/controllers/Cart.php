<?php 

class cart extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_cart');
	}

	public function index()
	{	
		$data['cart']=$this->m_cart->get_all_cart($this->session->id_users);
		$this->load->view('home/templates/header');
		$this->load->view('home/cart', $data);
		$this->load->view('home/templates/footer');
	}

	function add_to_cart($id_users,$id_product){
		$data = array(
			'id_users' => $id_users,
			'id_product' => $id_product,
		);
		$this->m_cart->insert($data);
		redirect(base_url('category'));
	}

	public function checkout($id_users)
	{
		$this->m_cart->checkout($id_users);
		redirect(base_url("transaksi"));
	}

}