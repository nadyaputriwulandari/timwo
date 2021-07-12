<?php

/**
 * 
 */
class Login_model extends CI_Model
{

	public function cek_login($username)
	{
		$this->db->where("username", $username);
		//$this->db->where("password", $password);
		return $this->db->get('user');
	}

	public function getLoginData($user, $pass)
	{
		$u = $user;
		$p = $pass;

		$query_cekalogin = $this->db->get_where('user', array('username' => $u, 'password' => $p));

		if (count($query_cekalogin->result()) > 0) {
			foreach ($query_cekalogin->result() as $qck) {
				foreach ($query_cekalogin->result() as $qck) {
					$sess_data['logged_in'] = TRUE;
					$sess_data['username'] = $qck->username;
					$sess_data['password'] = $qck->password;
					$sess_data['level'] = $qck->level;
					$this->session->set_userdata($sess_data);
				}
				redirect('admin/dashboard');
			}
		} else {
			$this->session->set_flashdata('pesan', 'Gagal');
			redirect('admin/auth');
		}
	}

	public function cek_login_vendor($username)
	{

		$this->db->where("nama_vendor", $username);
		//$this->db->where("password", $password);
		return $this->db->get('tb_vendor');
		// $this->db->where("nama_vendor", $username);
		// $this->db->where("password", $password);
		// return $this->db->get('tb_vendor');
	}
}
