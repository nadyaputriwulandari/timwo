<?php

class Model_paket extends CI_Model
{

	public function tampil_data()
	{
		return $this->db->get('tb_paket');
	}
	public function tampil_data_galeri()
	{
		return $this->db->get('galeri')->result();
	}
	public function tampil_id_galeri($where)
	{
		return $this->db->get_where('galeri', $where)->result();
	}
	public function tampil_data_by_vendor($where)
	{
		return $this->db->get_where('tb_paket', $where)->result();
	}
	public function input_data($data)
	{
		$this->db->insert('tb_paket', $data);
	}
	public function input_data_galeri($data)
	{
		$this->db->insert('galeri', $data);
	}
	public function input_aksi_galeri()
	{
		$data = array(
			'gambar' => $this->input->post('gambar', TRUE),
		);

		$this->model_paket->input_data($data);

		redirect('vendor/galeri');
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
