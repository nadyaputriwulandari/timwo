<?php

class Model_bayar extends CI_Model{
	
public function tampil_data(){
	return $this->db->get('bayar');
	}
}