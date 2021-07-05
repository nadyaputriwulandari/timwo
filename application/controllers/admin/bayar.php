<?php

/**
 * 
 */
class Bayar extends CI_Controller
{
	
	public function index()
	{

		$data['bayar'] = $this->model_bayar->tampil_data('bayar')->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/bayar',$data);
			$this->load->view('templates/footer');
	}
}