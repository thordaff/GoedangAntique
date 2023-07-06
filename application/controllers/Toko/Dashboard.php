<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('Auth');
		$this->load->model('Show_data');
	}

	public function index()
	{
		$data['user'] = $this->Auth->Session();
		$data['show'] = $this->Show_data->Show();
		$data['toko'] = $this->Show_data->ShowToko();
		$this->load->view('Toko/dashboard',$data);
	}

}
