<?php

class Daftar_model extends CI_Model{

    public function ambil_data($id)
	{
		$this->db->where('username', $id);
		return $this->db->get('user')->row();
	}
	public function tampil_data($table)
	{
		return $this->db->get('user');

	}
	public function input_data($data)
	{
		$this->db->insert('user',$data);
	}
}
