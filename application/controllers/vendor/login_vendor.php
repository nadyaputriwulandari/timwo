<?php

/**
 * 
 */
class Login_vendor extends CI_Controller
{

    public function index()
    {
        $this->load->view('vendor/login_vendor');
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('nama_vendor', 'nama_vendor', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('vendor/dashboard');
            $this->load->view('templates/footer');
        } else {
            $username = $this->input->post('nama_vendor');
            $password = $this->input->post('password');

            $user = $username;
            $pass = $password;

            $cek = $this->login_model->cek_login_vendor($user, $pass);

            if ($cek->num_rows() > 0) {
                foreach ($cek->result() as $ck) {

                    $sess_data['nama_vendor'] = $ck->nama_vendor;
                    $sess_data['kategori_vendor'] = $ck->kategori_vendor;
                    $sess_data['kode_vendor'] = $ck->kode_vendor;

                    $this->session->set_userdata($sess_data);
                }
                // if ($sess_data['kode_vendor'] == 'DKR') {
                // 	redirect('vendor/dashboard');
                // } else if ($sess_data['level'] == 'vendor') {
                // 	redirect('vendor/dashboard');
                // } else {
                // 	$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                //   GAGAL !
                //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //   <span aria-hidden="true">&times;</span>
                //   </button>
                //   </div>');
                // 	redirect('home');
                // };
                redirect('vendor/dashboard/index');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  GAGAL !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				  </div>');

                redirect('vendor/login_vendor');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('vendor/login_vendor');
    }
}
