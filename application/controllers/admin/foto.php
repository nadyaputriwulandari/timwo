<?php

/**
 * 
 */
class Foto extends CI_Controller
{
	
	public function index()
	{

		$data['fg'] = $this->model_foto->tampil_data('fg')->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/foto',$data);
			$this->load->view('templates/footer');
	}
}