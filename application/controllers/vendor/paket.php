<?php

/**
 * 
 */
class Paket extends CI_Controller
{

	public function index()
	{
		$where = array('id_vendor' => $this->session->userdata('kode_vendor'));
		$data['tb_paket'] = $this->model_paket->tampil_data_by_vendor($where);

		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/paket', $data);
		$this->load->view('templates/footer');
	}
	public function input()
	{
		$data = array(

			'id_paket' => set_value('id_paket'),
			'paket'	=> set_value('paket'),
			'harga' => set_value('harga'),
			'deskripsi' => set_value('deskripsi'),
			'foto' => set_value('foto'),


		);
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/paket_form', $data);
		$this->load->view('templates_vendor/footer');
	}

	public function input_galeri()
	{
		$data = array(
			'foto' => set_value('foto'),
		);
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/galeri_form', $data);
		$this->load->view('templates_vendor/footer');
	}

	public function input_aksi_galeri()
	{
		$data = array(
			'gambar' => $this->input->post('gambar', TRUE),
		);

		$this->model_paket->input_data($data);

		redirect('vendor/galeri');
	}

	public function input_aksi()
	{


		$data = array(
			'id_vendor' => $this->input->post('id_vendor', TRUE),
			'paket' => $this->input->post('paket', TRUE),
			'harga'	=> $this->input->post('harga', TRUE),
			'deskripsi'	=> $this->input->post('deskripsi', TRUE),
			'foto' => $this->input->post('foto', TRUE),

		);

		$this->model_paket->input_data($data);

		redirect('vendor/paket');
	}
	public function update($id_paket)
	{
		$where = array('id_paket' => $id_paket);
		$data['tb_paket'] = $this->model_paket->edit_data($where, 'tb_paket')->result();
		$this->load->view('templates_vendor/header');
		$this->load->view('templates_vendor/sidebar');
		$this->load->view('vendor/edit_paket', $data);
		$this->load->view('templates_vendor/footer');
	}
	public function update_aksi()
	{
		$id_paket = $this->input->post('id_paket');
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		$foto = $this->input->post('foto');
		//$status_paket = $this->input->post('status_paket');
		//$foto = $this->input->post('foto')

		$data = array(
			'paket' => $paket,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
			'foto' => $foto,
			//'status_paket' => $status_paket,
			//'foto' => $foto

		);
		$where = array(
			'id_paket' => $id_paket
		);
		$this->model_paket->update_data($where, $data, 'tb_paket');
		redirect('vendor/paket');
	}
	public function delete($id_paket)
	{
		$where = array('id_paket' => $id_paket);
		$this->model_paket->hapus_data($where, 'tb_paket');
		redirect('vendor/paket');
	}
}
