<?php  
class Arrived extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_arrived");
		$this->load->model("M_konfirmasi");
	}

	public function index()
	{
		$this->load->view('home/templates/header');
		$this->load->view('home/arrived');
		$this->load->view('home/templates/footer');
	}

	public function konfirmasi()
	{
		$this->M_arrived->konfirmasi($this->session->id_users);
		redirect(base_url());
	}
}