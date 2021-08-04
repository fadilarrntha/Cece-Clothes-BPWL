<?php 

class Registeradmin extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_loginadmin');
 
	}

	public function index()
	{
		$this->load->view('admin/authadmin');
	}
	
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_loginadmin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$cekdata = $this->m_loginadmin->get_user($username);
			$data_session = array(
				'id_admin' => $cekdata['id_admin'],
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
 
		}else{
			redirect(base_url('registeradmin'));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('registeradmin'));
	}
}