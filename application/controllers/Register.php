<?php 

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');
 
	}

	public function index()
	{
		$this->load->view('home/auth');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("users",$where)->num_rows();
		if($cek > 0){
			$cekdata = $this->m_login->get_user($username);
			$data_session = array(
				'id_users' => $cekdata['id_users'],
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			redirect(base_url("home"));
 
		}else{
			redirect(base_url('register'));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('register'));
	}

	function daftar(){
		$this->load->view('home/register');
	}

	function aksi_daftar(){
		$data=array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->m_login->daftar($data);
		redirect(base_url('register'));
	}
}