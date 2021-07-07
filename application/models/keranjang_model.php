<?php

class Keranjang_model extends CI_Model
{
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
