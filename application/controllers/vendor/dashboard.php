<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	public function index()
	{

		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/dashboard');
		$this->load->view('templates_vendor/footer');
	}
}