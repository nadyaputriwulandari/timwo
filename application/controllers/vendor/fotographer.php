<?php

/**
 * 
 */
class Fotographer extends CI_Controller
{
	
	public function index()
	{

		$data['fg'] = $this->model_foto->tampil_data('fg')->result();

			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/fotographer',$data);
			$this->load->view('templates/footer');
	}
	public function input()
	{
		$data = array(

			'id_fg' => set_value('id_fg'),
			'paket'	=> set_value('paket'),
			'harga' => set_value('harga'),
			'foto' => set_value('foto'),
			
			
		);
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/fg_form',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function input_aksi()
	{
		
		
			$data = array(
				'paket' => $this->input->post('paket', TRUE),
				'harga'	=> $this->input->post('harga', TRUE),
				'foto' => $this->input->post('foto', TRUE),
				
			);

			$this->model_foto->input_data($data);
		
			redirect('vendor/fotographer');
		
	}
	public function update($id_fg)
	{
		$where = array('id_fg' => $id_fg) ;
		$data['fg'] = $this->model_foto->edit_data($where, 'fg')->result();
			$this->load->view('templates_vendor/header');
			$this->load->view('templates_vendor/sidebar');
			$this->load->view('vendor/edit_fg',$data);
			$this->load->view('templates_vendor/footer');
	}
	public function update_aksi()
	{
		$id_fg = $this->input->post('id_fg');
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$foto = $this->input->post('foto');
		

		$data = array(
			'paket' => $paket,
			'harga' => $harga,
			'foto' => $foto
		);
		$where = array(
			'id_fg' => $id_fg
		);
		$this->model_foto->update_data($where,$data,'fg');
		redirect('vendor/fotographer');
	}
	public function delete($id_fg)
	{
		$where = array('id_fg' =>$id_fg);
		$this->model_foto->hapus_data($where,'fg');
		redirect('vendor/fotographer');
	}
}



