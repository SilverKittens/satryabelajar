<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
	 {
	  parent::__construct();
		$this->load->helper('url');
	 }
	public function index()
	{
		$this->load->view('index');
	}
	public function update()
	{
		$this->load->view('formupdate');
	}
	public function download()
	{
		$data = $this->load->view('data');
		header("Content-Type: application/ms-excel");
		header("Content-Disposition: attachment; filename=komentar.xls");
		echo $data;
	}
}
