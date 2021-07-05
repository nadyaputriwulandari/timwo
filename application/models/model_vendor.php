<?php

class Model_vendor extends CI_Model
{

	public function tampil_data()
	{
		return $this->db->get('tb_vendor');
	}
	public function update_data($where, $data, $table)
	{

		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
