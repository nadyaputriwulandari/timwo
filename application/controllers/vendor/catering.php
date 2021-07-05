<?php

/**
 * 
 */
class Catering extends CI_Controller
{
	
	public function index()
	{

		$data['catering'] = $this->model_catering->tampil_data('catering')->result();

			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/catering',$data);
			$this->load->view('templates/footer');
	}
	public function input()
	{
		$data = array(

			'id_catering' => set_value('id_catering'),
			'paket'	=> set_value('paket'),
			'harga' => set_value('harga'),
			'foto' => set_value('foto'),
			
			
		);
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/catering_form',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function input_aksi()
	{
		
		
			$data = array(
				'paket' => $this->input->post('paket', TRUE),
				'harga'	=> $this->input->post('harga', TRUE),
				'foto' => $this->input->post('foto',TRUE),
				
			);

			$this->model_catering->input_data($data);
		
			redirect('vendor/catering');
		
	}
	public function update($id_catering)
	{
		$where = array('id_catering' => $id_catering) ;
		$data['catering'] = $this->model_catering->edit_data($where, 'catering')->result();
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/edit_catering',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function update_aksi()
	{
		$id_catering = $this->input->post('id_catering');
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$foto = $this->input->post('foto');

		$data = array(
			'paket' => $paket,
			'harga' => $harga,
			'foto' => $foto,
			
		);
		$where = array(
			'id_catering' => $id_catering
		);
		$this->model_catering->update_data($where,$data,'catering');
		redirect('vendor/catering');
	}
	public function delete($id_catering)
	{
		$where = array('id_catering' =>$id_catering);
		$this->model_catering->hapus_data($where,'catering');
		redirect('vendor/catering');
	}
}



