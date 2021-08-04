<?php  

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!($this->session->status=='login')) {
			redirect(base_url('registeradmin'));
		}
		$this->load->model('M_user'); 
	}

	public function index()
	{
		$data['users'] = $this->M_user->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/indexuser', $data);
		$this->load->view('admin/templates/footer');
	}


	public function hapus($id_users)
	{
		$this->db->where('id_users', $id_users);
		$this->db->delete('users');
		redirect(base_url('user'));
	}

	public function edit($id_users)
	{
		$data['data'] = $this->M_user->edit($id_users);
		$this->load->view('admin/updateuser', $data);
		//redirect(base_url('admin'));
	}

	public function update()
	{
		//move_uploaded_file($_FILES['gambar_product']['tmp_name'],'./assets/product/'.$_FILES['gambar_product']['name']);
		$id = $this->input->post('id_users', TRUE);
		$users = [
			"id_users" => $this->input->post('id_users', TRUE),
			"username" => $this->input->post('username', TRUE),
			"password" => $this->input->post('password', TRUE),
		];
		$this->M_user->update($id, $users);
		redirect(base_url('user'));
	}
}