<?php

/**
 * 
 */
class Mc extends CI_Controller
{
	
	public function index()
	{

		$data['mc'] = $this->model_mc->tampil_data('mc')->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/mc',$data);
			$this->load->view('templates/footer');
	}
}