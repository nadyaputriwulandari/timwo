<?php

/**
 * 
 */
class Mua extends CI_Controller
{
	
	public function index()
	{

		$data['tb_vendor'] = $this->model_vendor->tampil_data_by_vendor('MUA')->result();
    //var_dump($data);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/vendor', $data);
    $this->load->view('templates/footer');
	}
}