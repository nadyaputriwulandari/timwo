<?php

class Model_rating extends CI_Model{
	
public function tampil_data(){
	return $this->db->get('rating');
	}
}