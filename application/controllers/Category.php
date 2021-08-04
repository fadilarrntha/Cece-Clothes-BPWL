<?php 

class category extends CI_Controller {
	public function index($param=null)
	{
		if ($param == null) {
			$data['product'] = $this->model_product->tampil_data()->result();
		} else {
			$data['product'] = $this->model_product->tampil_data($param)->result();
		}
		$this->load->view('home/templates/header');
		$this->load->view('home/category', $data);
		$this->load->view('home/templates/footer');
	}

	public function search()
	{
		$data['product'] = $this->model_product->search($this->input->post("keyword"),true)->result();
		$this->load->view('home/templates/header');
		$this->load->view('home/category', $data);
		$this->load->view('home/templates/footer');
	}
}