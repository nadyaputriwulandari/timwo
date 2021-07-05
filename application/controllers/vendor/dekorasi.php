<?php

/**
 * 
 */
class Dekorasi extends CI_Controller
{
	
	public function index()
	{

		$data['dekorasi'] = $this->model_dekor->tampil_data('dekorasi')->result();

			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/dekorasi',$data);
			$this->load->view('templates/footer');
	}
	public function input()
	{
		$data = array(

			'id_dekorasi' => set_value('id_dekorasi'),
			'paket'	=> set_value('paket'),
			'harga' => set_value('harga'),
			'foto' => set_value('foto'),
			'keterangan'	=> set_value('keterangan'),
			//'foto'	=> set_value('foto'),
			   
		);
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/dekorasi_form',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function input_aksi()
	{
		
		
			$data = array(
				'paket' => $this->input->post('paket', TRUE),
				'harga'	=> $this->input->post('harga', TRUE),
				'foto' => $this->input->post('foto',TRUE),
				'keterangan' =>$this->input->post('keterangan',TRUE),
				//'foto' => $this->input->post('foto', TRUE),
				
			);

			$this->model_dekor->input_data($data);
		
			redirect('vendor/dekorasi');
		
	}
	public function update($id_dekorasi)
	{
		$where = array('id_dekorasi' => $id_dekorasi) ;
		$data['dekorasi'] = $this->model_dekor->edit_data($where, 'dekorasi')->result();
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/edit_dekorasi',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function update_aksi()
	{
		$id_dekorasi = $this->input->post('id_dekorasi');
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$foto= $this->input->post('foto');
		$keterangan = $this->input->post('keterangan');
		//$foto = $this->input->post('foto')

		$data = array(
			'paket' => $paket,
			'harga' => $harga,
			'foto' => $foto,
			'keterangan' => $keterangan,
			//'foto' => $foto

		);
		$where = array(
			'id_dekorasi' => $id_dekorasi
		);
		$this->model_dekor->update_data($where,$data,'dekorasi');
		redirect('vendor/dekorasi');
	}
	public function delete($id_dekorasi)
	{
		$where = array('id_dekorasi' =>$id_dekorasi);
		$this->model_dekor->hapus_data($where,'dekorasi');
		redirect('vendor/dekorasi');
	}
}



