<?php

/**
 * 
 */
class Rating extends CI_Controller
{
	
	public function index()
	{

		$data['rating'] = $this->model_rating->tampil_data('rating')->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/rating',$data);
			$this->load->view('templates/footer');
	}
}