<?php

class Model_vendor extends CI_Model
{

	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('tb_vendor');
		$this->db->JOIN('kategori_vendor', 'tb_vendor.kategori_vendor=kategori_vendor.kode_unik', 'left');

		return $this->db->get();
	}
	public function update_data($where, $data, $table)
	{

		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function tampil_data_by_vendor($kode_vendor)
	{

		$this->db->select('*');
		$this->db->from('tb_vendor');
		$this->db->JOIN('kategori_vendor', 'tb_vendor.kategori_vendor=kategori_vendor.kode_unik', 'left');
		$this->db->JOIN('tb_paket', 'tb_paket.id_vendor=tb_vendor.kode_vendor', 'left');
		$this->db->where('kategori_vendor', $kode_vendor);
		return $this->db->get();
	}
	public function tampil_data_by_paket($kode_vendor, $id_paket)
	{

		$this->db->select('*');
		$this->db->from('tb_vendor');
		$this->db->JOIN('kategori_vendor', 'tb_vendor.kategori_vendor=kategori_vendor.kode_unik', 'left');
		$this->db->JOIN('tb_paket', 'tb_paket.id_vendor=tb_vendor.kode_vendor', 'left');
		$this->db->where('kode_vendor', $kode_vendor);
		$this->db->where('id_paket', $id_paket);
		return $this->db->get();
	}

	public function find($id)
	{
		$result = $this->db->where('id_paket', $id)
			->limit(1)
			->get("tb_paket");

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function singel_find_vendor($id)
	{
		$result = $this->db->where('kode_vendor', $id)
			->limit(1)
			->get("tb_vendor");

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}
