<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
		$this->load->model('Show_data');
		$this->load->model('Produk_data');
		$this->load->model('Keranjang_data');
	}
	public function index()
	{
		$data['user'] = $this->Auth->Session();
		$data['show'] = $this->Show_data->Show();
		$data['produk'] = $this->Produk_data->ShowData();
		$this->load->view('keranjang',$data);
	}

	// Tambah Keranjang
	public function AddKeranjang()
	{
		$id_user = $this->input->post('id_user');
		$id_barang = $this->input->post('id_barang');
		$id_toko = $this->input->post('id_toko');
	
		$data = array(
			'user_id' => $id_user,
			'barang_id' => $id_barang,
			'toko_id' => $id_toko
		);
	
		try {
			$this->Keranjang_data->AddKeranjang($data);
			redirect('Keranjang');
		} catch (Exception $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}	
	
}
