<?php

/**
 * 
 */
class User extends CI_Controller
{

	public function index()
	{

		$data['user'] = $this->user_model->tampil_data('user')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('templates/footer');
	}

	public function input()
	{
		$data = array(


			'username'	=> set_value('username'),
			'password' => set_value('password'),
			'level'	=> set_value('level'),
		);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/user_form', $data);
		$this->load->view('templates/footer');
	}
	public function input_aksi()
	{


		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password'	=> $this->input->post('password', TRUE),
			'level' => $this->input->post('level', TRUE),
		);

		$this->user_model->input_data($data);

		redirect('admin/user');
	}
	public function update($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->user_model->edit_data($where, 'user')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/user_update', $data);
		$this->load->view('templates/footer');
	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'level' => $level

		);
		$where = array(
			'id' => $id
		);
		$this->user_model->update_data($where, $data, 'user');
		redirect('admin/user');
	}
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->user_model->hapus_data($where, 'user');
		redirect('admin/user');
	}
}
