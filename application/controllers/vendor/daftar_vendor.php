<?php

/**
 * 
 */
class Daftar_vendor extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_vendor_model');
	}

	public function index()
	{

		$this->load->view('vendor/daftar_vendor');
	}

	// public function input()
	// {


	// 	$data = array(

	// 		'kode_vendor'	=> set_value('kode_vendor'),
	// 		'nama_vendor'	=> set_value('nama_vendor'),
	// 		'kategori_vendor' => set_value('kategori_vendor'),
	// 		'no_telp_vendor' => set_value('no_telp_vendor'),
	// 		'alamat_vendor' => set_value('alamat_vendor'),
	// 		'password' => set_value('password'),

	// 	);

	// 	$this->load->view('vendor/daftar_vendor');
	// }

	public function input_aksi()
	{

		$query = $this->db->query("SELECT * FROM tb_vendor ORDER BY kode_vendor DESC LIMIT 1;");
		$total = $this->daftar_vendor_model->hitung();
		$row = $query->row($total - 1);
		echo $row->kode_vendor;
		$array_kode = str_split($row->kode_vendor, 3);

		$data = array(

			'kode_vendor' => $array_kode[0] . "" . ($array_kode[1] + 1),
			'nama_vendor' => $this->input->post('nama_vendor', TRUE),
			'kategori_vendor'	=> $this->input->post('kategori_vendor', TRUE),
			'no_telp_vendor'	=> $this->input->post('no_telp_vendor', TRUE),
			'alamat_vendor'	=> $this->input->post('alamat_vendor', TRUE),
			'password'	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'status'	=> 0

		);

		$this->daftar_vendor_model->input_data($data);



		redirect('vendor/login_vendor');
	}
}
