<?php

class User_model extends CI_Model{

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
	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}