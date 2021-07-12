<?php

class Vendor extends CI_Controller
{
  public function index()
  {
    $data['tb_vendor'] = $this->model_vendor->tampil_data()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/vendor', $data);
    $this->load->view('templates/footer');
  }

  public function tampilvendor()
  {

    $data['tb_vendor'] = $this->model_vendor->tampil_data_by_vendor('DKR')->result();
    //var_dump($data);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/vendor', $data);
    $this->load->view('templates/footer');
  }
  public function update($kode_vendor)
  {
    $where = array('kode_vendor' => $kode_vendor);
    $data['tb_vendor'] = $this->model_vendor->edit_data($where, 'tb_vendor')->result();

    $data['submenu'] = $this->db->get_where('tb_vendor', ['kode_vendor' => $kode_vendor])->row_array();
    $data['menu'] = $this->db->get('kategori_vendor')->result_array();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/edit_vendor', $data);
    $this->load->view('templates/footer');
  }
  public function update_aksi()
  {
    $kode_vendor = $this->input->post('kode_vendor');
    $nama_vendor = $this->input->post('nama_vendor');
    $no_telp_vendor = $this->input->post('no_telp_vendor');
    $alamat_vendor = $this->input->post('alamat_vendor');
    $kategori = $this->input->post('kategori');
    $status = $this->input->post('status');

    $data = array(
      'nama_vendor' => $nama_vendor,
      'no_telp_vendor' => $no_telp_vendor,
      'alamat_vendor' =>  $alamat_vendor,
      'kategori_vendor' => $kategori,
      'status' =>  $status,

    );
    $this->db->where('kode_vendor', $kode_vendor);
    $this->db->update('tb_vendor', $data);
    // $where = array(
    //   'kode_vendor' => $kode_vendor
    // );
    // $this->model_vendor->update_data($where, $data, 'tb_vendor');
    redirect('admin/vendor');
  }
  public function delete($kode_vendor)
  {
    $where = array('kode_vendor' => $kode_vendor);
    $this->model_vendor->hapus_data($where, 'tb_vendor');
    redirect('admin/vendor');
  }
}
