<?php

/**
 * 
 */
class Auth extends CI_Controller
{

	public function index()
	{


		$this->load->view('admin/login');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('admin/login');
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $username;
			$pass = $password;

			$cek = $this->login_model->cek_login($user, $pass);

			if ($cek->num_rows() > 0) {

				foreach ($cek->result() as $ck) {

					$sess_data['username'] = $ck->username;
					$sess_data['level'] = $ck->level;

					$this->session->set_userdata($sess_data);
				}
				if ($sess_data['level'] == 'admin') {
					redirect('admin/dashboard');
				} else if ($sess_data['level'] == 'vendor') {
					redirect('vendor/dashboard');
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  GAGAL !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				  </div>');
					redirect('user/home');
				};
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  GAGAL !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				  </div>');
				redirect('admin/auth');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/auth');
	}
}
