<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about extends CI_Controller
{

	public $username = null;
	function __construct()
	{
		parent::__construct();
		$this->username = $this->session->userdata('username');
	}
	public function index()
	{
		// var_dump( $this->session->userdata('username'));
		// die();
		$data = ['nama_customer' => $this->username];
		$this->load->view('user/header');
		$this->load->view('user/about', $data);
		$this->load->view('user/footer');
	}
}
