<?php

/**
 * 
 */
class Dekor extends CI_Controller
{
	
	public function index()
	{

		$data['dekorasi'] = $this->model_dekor->tampil_data('dekorasi')->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/dekor',$data);
			$this->load->view('templates/footer');
	}
}