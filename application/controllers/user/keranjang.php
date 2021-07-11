<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends CI_Controller
{

	public $username = null;
	function __construct()
	{
		parent::__construct();
		// $params = array('server_key' => 'SB-Mid-server-L4c6BF_MZ-jfhzsoU-2MV5zU', 'production' => false);
		// $this->load->library('midtrans');
		// $this->midtrans->config($params);
		// $this->load->helper('url');
		$this->username = $this->session->userdata('username');
		if ($this->session->userdata('username')) {
			// redirect('')
			//echo '<script> alert("Test")<script>';
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Anda harus login terlebih dahulu!</div>');
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
	public function delete_item($id)
	{
		$this->cart->remove($id);
		redirect('user/keranjang');
	}
	public function delete($id)
	{
		$where = array('id_paket' => $id);
		$this->user_model->hapus_data($where, 'user');
		redirect('user/keranjang');
	}
	public function pesan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$id = $this->input->post('id_username');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');

		$booking = array(
			'nama_vendor' => $id,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'tgl_pembayaran' => date('Y-m-d H:i:s'),
			'tgl_expired' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
			'dp' => 0,
			'pelunasan' => 0,
			'status' => 0
		);
		$this->db->insert('book', $booking);
		$id_book = $this->db->insert_id();
		// var_dump($id_invoice);
		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_booking' => $id_book,
				'id_paket' => $item['id'],
				'harga' =>  $item['price'],
				'jumlah' =>  $item['qty'],
				'tgl_acara' => $this->cart->product_options($item['rowid'])['Tgl'],
			);
			$this->db->insert('tb_pesanan', $data);
		}
	}
}
