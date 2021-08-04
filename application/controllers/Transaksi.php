<?php 
class Transaksi extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_cart');
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$data['cart']=$this->m_cart->get_all_cart($this->session->id_users);
		$this->load->view('home/templates/header');
		$this->load->view('home/transaksi', $data);
		$this->load->view('home/templates/footer');
	}

	public function send()
	{
		$data = $_POST;
		$data["id_users"] = $this->session->id_users;
		$this->m_transaksi->bayar($data);
		redirect(base_url() . "home");
	}
}