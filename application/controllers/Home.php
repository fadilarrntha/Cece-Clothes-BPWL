<?php 

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!($this->session->status=='login')) {
			redirect(base_url('register'));
		}
	}

	public function index($param=null)
	{
		if ($param == null) {
			$data['product'] = $this->model_product->tampil_data()->result();
		} else {
			$data['product'] = $this->model_product->tampil_data($param)->result();
		}
		$this->load->view('home/templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('home/templates/footer');
	}
}