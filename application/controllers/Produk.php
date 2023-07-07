<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
		$this->load->model('Show_data');
		$this->load->model('Produk_data');
	}
	public function index()
	{
		$data['user'] = $this->Auth->Session();
		$data['show'] = $this->Show_data->Show();
		$data['produk'] = $this->Produk_data->ShowData();
		$this->load->view('produk',$data);
	}
}
