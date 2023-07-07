<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
		$data['barang'] = $this->Keranjang_data->ShowDataKeranjang();
		$this->load->view('checkout',$data);
	}

	// Tambah Keranjang
	public function AddKeranjang()
	{
		$user_id = $this->input->post('user_id');
		$barang_id = $this->input->post('barang_id');
		$toko_id = $this->input->post('toko_id');
	
		$data = array(
			'user_id' => $user_id,
			'barang_id' => $barang_id,
			'toko_id' => $toko_id,
		);
		$this->Keranjang_data->AddKeranjang($data);
		redirect('Keranjang');
	}	
	
}
