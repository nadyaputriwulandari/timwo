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
		//$this->load->view('vendor/vendor_dkr');
		$this->load->view('templates_vendor/footer');
	}

	public function dekor()
	{
		$data['dekorasi'] = $this->model_vendor->tampil_data_by_vendor('DKR')->result();;
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/vendor_dkr', $data);
		$this->load->view('templates_vendor/footer');
	}

	public function fotografer()
	{
		$data['fotografer'] = $this->model_vendor->tampil_data_by_vendor('FTG')->result();;
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/vendor_ftg', $data);
		$this->load->view('templates_vendor/footer');
	}

	public function catering()
	{
		$data['catering'] = $this->model_vendor->tampil_data_by_vendor('CTR')->result();;
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/vendor_ctr', $data);
		$this->load->view('templates_vendor/footer');
	}

	public function mua()
	{
		$data['mua'] = $this->model_vendor->tampil_data_by_vendor('MUA')->result();;
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/vendor_mua', $data);
		$this->load->view('templates_vendor/footer');
	}

	public function mc()
	{
		$data['mc'] = $this->model_vendor->tampil_data_by_vendor('MC')->result();;
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/vendor_mc', $data);
		$this->load->view('templates_vendor/footer');
	}
}
