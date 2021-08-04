<?php  

class Konfirmasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konfirmasi'); 
	}

	public function index()
	{
		$data['transaksi'] = $this->M_konfirmasi->tampil();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/konfirmasi', $data);
		$this->load->view('admin/templates/footer');
	}

	public function detail($id_users)
	{
		$data['detail_user'] = $this->M_konfirmasi->get_detail_user($id_users);
		$data['items'] = $this->M_konfirmasi->get_items($id_users);
		$data['total'] = $this->M_konfirmasi->get_total($this->M_konfirmasi->get_id_transaksi($id_users));
		$this->load->view("admin/detail",$data);
	}

	public function konfirmasi($id_users)
	{
		$this->M_konfirmasi->konfirmasi($id_users);
		redirect(base_url() . "konfirmasi");
	}
}