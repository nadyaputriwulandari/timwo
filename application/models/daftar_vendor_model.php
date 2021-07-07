<?php

class Daftar_vendor_model extends CI_Model{

	public function tampil_data($table)
	{
		return $this->db->get('tb_vendor');

	}
	public function input_data($data)
	{
		$this->db->insert('tb_vendor',$data);
	}
}
