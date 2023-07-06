<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('Auth');
		$this->load->model('Produk_data');
	}

	public function index()
	{
		$data['user'] = $this->Auth->Session();
		$data['produk'] = $this->Produk_data->ShowProduk();
		$data['produkAdd'] = $this->Produk_data->ShowDataAdd();
		$this->load->view('Toko/produk',$data);
	}
}
