<?php

/**
 * 
 */
class Galeri extends CI_Controller
{

    public function index()
    {

        $data['galeri'] = $this->model_paket->tampil_data_galeri('id_galeri');
        // var_dump($data);
        // die;
        $this->load->view('templates_vendor/header');
        $this->load->view('templates_vendor/sidebar');
        $this->load->view('vendor/vendor_galeri', $data);
        $this->load->view('templates/footer');
    }

    public function input_galeri()
    {
        // echo "a";
        $data = array(
            'foto' => set_value('foto'),
        );

        $this->load->view('templates_vendor/header');
        $this->load->view('templates_vendor/sidebar');
        $this->load->view('vendor/galeri_form', $data);
        $this->load->view('templates_vendor/footer');
    }

    public function input_aksi_galeri()
    {
        $data = array(
            'gambar' => $this->input->post('foto', TRUE),
            'kategori' => $this->session->userdata('kategori_vendor'),
        );
        $this->model_paket->input_data_galeri($data);
        redirect('vendor/galeri');
    }

    public function input_aksi()
    {
        $data = array(
            'id_vendor' => $this->input->post('id_vendor', TRUE),
            'paket' => $this->input->post('paket', TRUE),
            'harga'    => $this->input->post('harga', TRUE),
            'deskripsi'    => $this->input->post('deskripsi', TRUE),
            'foto' => $this->input->post('foto', TRUE),

        );

        $this->model_paket->input_data($data);

        redirect('vendor/paket');
    }
    public function input()
    {
        $data = array(

            'id_paket' => set_value('id_paket'),
            'paket'    => set_value('paket'),
            'harga' => set_value('harga'),
            'deskripsi' => set_value('deskripsi'),
            'foto' => set_value('foto'),


        );
        $this->load->view('templates_vendor/header');
        $this->load->view('templates_vendor/sidebar');
        $this->load->view('vendor/paket_form', $data);
        $this->load->view('templates_vendor/footer');
    }
    public function delete($id_paket)
    {
        $where = array('id_paket' => $id_paket);
        $this->model_paket->hapus_data($where, 'tb_paket');
        redirect('vendor/paket');
    }
}
