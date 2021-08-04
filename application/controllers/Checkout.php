<?php  
class checkout extends CI_Controller{
	public function index()
	{	
		$this->load->view('home/templates/header');
		$this->load->view('home/checkout');
		$this->load->view('home/templates/footer');
	}

}