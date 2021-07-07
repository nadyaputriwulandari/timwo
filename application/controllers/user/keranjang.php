<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends CI_Controller
{

	public $username = null;
	function __construct()
	{
		parent::__construct();

		$this->username = $this->session->userdata('username');
		if ($this->session->userdata('username')) {
			// redirect('')
			//echo '<script> alert("Test")<script>';
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
		}
	}
	public function index()
	{
		//var_dump($this->model_vendor->tampil_data_by_paket($kode_vendor, $id_paket)->result());
		// var_dump($this->cart->contents());
		// die();
		$this->load->view('user/header');
		$this->load->view('user/keranjang');
		$this->load->view('user/footer');
	}

	public function delete($id)
	{
		$where = array('id_paket' => $id);
		$this->user_model->hapus_data($where, 'user');
		redirect('user/keranjang');
	}
}
