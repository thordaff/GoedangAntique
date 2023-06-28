<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Auth');
	}

	public function index()
	{
		$data['user'] = $this->Auth->Session();
		$this->load->view('Admin/dashboard',$data);
	}
    public function TotalToko()
    {
        $data['user'] = $this->Auth->Session();
		$this->load->view('Admin/totaltoko',$data);
    }
    public function Laporan()
    {
        $data['user'] = $this->Auth->Session();
		$this->load->view('Admin/laporan',$data);
    }
}