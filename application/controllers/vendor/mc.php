<?php

/**
 * 
 */
class Mc extends CI_Controller
{
	
	public function index()
	{

		$data['mc'] = $this->model_mc->tampil_data('mc')->result();

			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/mc',$data);
			$this->load->view('templates/footer');
	}
	public function input()
	{
		$data = array(

			'id_mc' => set_value('id_mc'),
			'paket'	=> set_value('paket'),
			'harga' => set_value('harga'),
			'foto' => set_value('foto')
			
			
		);
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/mc_form',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function input_aksi()
	{
		
		
			$data = array(
				'paket' => $this->input->post('paket', TRUE),
				'harga'	=> $this->input->post('harga', TRUE),
				'foto' => $this->input->post('foto', TRUE),
				
			);

			$this->model_mc->input_data($data);
		
			redirect('vendor/mc');
		
	}
	public function update($id_mc)
	{
		$where = array('id_mc' => $id_mc) ;
		$data['mc'] = $this->model_mc->edit_data($where, 'mc')->result();
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/edit_mc',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function update_aksi()
	{
		$id_mc = $this->input->post('id_mc');
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$foto = $this->input->post('foto');
		

		$data = array(
			'paket' => $paket,
			'harga' => $harga,
			'foto' => $foto,
			
		);
		$where = array(
			'id_mc' => $id_mc
		);
		$this->model_mc->update_data($where,$data,'mc');
		redirect('vendor/mc');
	}
	public function delete($id_mc)
	{
		$where = array('id_mc' =>$id_mc);
		$this->model_mc->hapus_data($where,'mc');
		redirect('vendor/mc');
	}
}



