<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Update_data');
	}

	// Role
    public function RolePenjual()
	{
		$id_user = $this->input->post('id_user');
		$penjual = 2;
		$data = array(
			'id_user' => $id_user,
			'role_id' => $penjual
		);

		$this->Update_data->UpdateRole($data);
	
		redirect('beranda');
	}
	
	
    public function RolePembeli()
	{
		$id_user = $this->input->post('id_user');
		$pembeli = 1;
		$data = array(
			'id_user' => $id_user,
			'role_id' => $pembeli
		);

		$this->Update_data->UpdateRole($data);
	
		redirect('beranda');
	}
}
