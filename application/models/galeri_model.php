<?php

class galeri_model extends CI_Model
{
	function tampil_data()
	{
		return $this->db->get('galeri')->result_array();
	}

	function tampil($limit, $start)
	{
		return $this->db->get('galeri', $limit, $start)->result_array();
	}

	function hitung()
	{
		return $this->db->get('galeri')->num_rows();
	}
}
