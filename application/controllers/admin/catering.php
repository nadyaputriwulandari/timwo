<?php

/**
 * 
 */
class Catering extends CI_Controller
{
	
	public function index()
	{

		$data['catering'] = $this->model_catering->tampil_data('catering')->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/catering',$data);
			$this->load->view('templates/footer');
	}
}