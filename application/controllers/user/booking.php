<?php
defined('BASEPATH') or exit('No direct script access allowed');

class booking extends CI_Controller
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
	public function index($kode_vendor, $id_paket)
	{
		//var_dump($this->model_vendor->tampil_data_by_paket($kode_vendor, $id_paket)->result());
		// die();

		$data = [
			'nama_customer' => $this->username,
			'kode_vendor' => $kode_vendor,
			'data_vendor' => $this->model_vendor->tampil_data_by_paket($kode_vendor, $id_paket)->row()
		];
		$this->load->view('user/header');
		$this->load->view('user/booking', $data);
		$this->load->view('user/footer');
	}
	public function input()
	{
		$data = array(

			'id_booking' => set_value('id_booking'),
			'id_klien' => set_value('id_klien'),
			'jenis_paket' => set_value('jenis_paket'),
			'harga' => set_value('harga'),
			'tgl_pesan' => set_value('tgl_pesan'),
			'status_pembayaran' => set_value('status_pembayaran'),
		);
	}

	public function input_aksi()
	{
		$data = array(
			'nama_vendor' => $this->input->post('nama_vendor', TRUE),
			'paket' => $this->input->post('paket', TRUE),
			'harga' => $this->input->post('harga', TRUE),
			'tanggal' => $this->input->post('tanggal', TRUE),
			'status_pembayaran' => $this->input->post('status_pembayaran', TRUE),


		);
		$this->booking_model->input_data($data);
		redirect('booking');
	}

	public function tambah_kekeranjang()
	{
		$id = $this->input->post('id_paket');
		$id_vendor = $this->input->post('id_vendor');
		$pkt = $this->model_vendor->find($id);
		$nama_vendor = $this->model_vendor->singel_find_vendor($id_vendor)->nama_vendor;
		// var_dump($pkt);
		// var_dump($nama_vendor);
		// die();

		$data = array(
			'id' => $pkt->id_paket,
			'qty' => 1,
			'price' => $pkt->harga,
			'name' => $pkt->paket,
			'options' => array('Tgl' => $this->input->post('tgl_pesan'), 'ID_Vendor' => $this->input->post('id_vendor'), 'Nama_Vendor' => $nama_vendor)

		);

		$this->cart->insert($data);
		redirect('user/keranjang');
	}

	public function mydata()
	{
		// $mydata = $this->cart->contents();
		// var_dump($mydata);
		// die();
		$this->load->view('user/test');
	}

	public function destroy()
	{
		$this->cart->destroy();
	}
}
