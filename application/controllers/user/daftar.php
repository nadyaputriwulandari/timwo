<?php

/**
 * 
 */
class Daftar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
	}

	public function index()
	{

		$this->load->view('user/daftar');
	}

	public function input()
	{
		$data = array(

			'username'	=> set_value('username'),
			'password' => set_value('password'),
			'alamat' => set_value('alamat'),
			'no_hp' => set_value('no_hp'),
			//'level' => set_value('level'),
		);
		$this->load->view('admin/auth');
	}

	public function input_aksi()
	{
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password'	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'alamat' => $this->input->post('alamat', TRUE),
			'no_hp' => $this->input->post('no_hp', TRUE),


		);

		$this->daftar_model->input_data($data);

		redirect('admin/auth');
	}
}
