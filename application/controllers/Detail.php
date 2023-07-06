<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Auth');
		$this->load->model('Show_data');
		$this->load->model('Produk_data');
		$this->load->model('Komentar_data');
	}
	public function index($id_barang)
	{
		$data['user'] = $this->Auth->Session();
		$data['show'] = $this->Show_data->Show();
		$data['produk'] = $this->Produk_data->ShowDetail($id_barang);
		$data['komentar'] = $this->Komentar_data->ShowKomentar($id_barang);
		$this->load->view('detailProduk', $data);
	}

	// Komentar
	public function Komentar($id_barang)
	{
		$user_id = $this->input->post('user_id');
		$barang_id = $this->input->post('barang_id');
		$isi_komentar = $this->input->post('isi_komentar');
		$data = array(
			'user_id' => $user_id,
			'barang_id' => $barang_id,
			'isi_komentar' => $isi_komentar,
		);
		$this->Komentar_data->AddData($data);
		redirect('Detail/'.$id_barang);
	}
	
	
	
}