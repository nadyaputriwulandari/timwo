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

            $cek = $this->login_model->cek_login_vendor($user);

            // var_dump($cek->result());
            // die;
            if ($cek->num_rows() > 0) {
                $cek_result = $cek->row();
                echo $password;
                echo $cek_result->password;
                if (password_verify($password, $cek_result->password)) {
                    echo "SUKSESSSSSSSS";
                    $sess_data['nama_vendor'] = $cek_result->nama_vendor;
                    $sess_data['kategori_vendor'] = $cek_result->kategori_vendor;
                    $sess_data['kode_vendor'] = $cek_result->kode_vendor;

                    $this->session->set_userdata($sess_data);

                    if ($sess_data['kategori_vendor'] == 'DKR') {
                        redirect('vendor/dashboard/dekor');
                    } else if ($sess_data['kategori_vendor'] == 'FTG') {
                        redirect('vendor/dashboard/fotografer');
                    } else if ($sess_data['kategori_vendor'] == 'CTR') {
                        redirect('vendor/dashboard/catering');
                    } else if ($sess_data['kategori_vendor'] == 'MC') {
                        redirect('vendor/dashboard/mc');
                    } else if ($sess_data['kategori_vendor'] == 'MUA') {
                        redirect('vendor/dashboard/mua');
                    } else {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        GAGAL !
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>');
                        redirect('vendor/login_vendor');
                    };
                } else {
                    echo "Password Gagal";
                    // redirect('vendor/login_vendor');
                }
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
