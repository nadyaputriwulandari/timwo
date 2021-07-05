<?php

class Booking extends CI_Controller{
  public function index()
  {
    $data['book'] = $this->model_booking->tampil_data()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/booking', $data);
    $this->load->view('templates/footer');
  }
  
  
  public function edit($id_booking)
  {
    $where = array('id_booking' =>$id_booking);
    $data['id'] = $id_booking;
    $data['book'] = $this->model_booking->edit_booking($where, 'book')->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/edit_booking', $data);
    $this->load->view('templates/footer');

  }
  public function update(){

    $id_booking   =$this->input->post('id_booking');
    $kategori  =$this->input->post('kategori');
    $nama_vendor  =$this->input->post('nama_vendor');
    $tanggal  =$this->input->post('tanggal');
    $harga  =$this->input->post('harga');
  
    
    $data = array(

      'kategori'  =>$kategori,
      'nama_vendor' =>$nama_vendor,
      'tanggal' =>$tanggal,
      'harga' =>$harga,
   

    );
    $where = array(
      'id_booking' =>$id_booking
    );
    $this->model_booking->update_data($where,$data, 'book');
    redirect('admin/booking/index');
  }
  public function hapus($id_booking)
  {
    $where = array('id_booking' =>$id_booking);
    $this->model_booking->hapus_data($where,'book');
    redirect('admin/booking');
  }
}

