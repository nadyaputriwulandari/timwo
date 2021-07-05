<?php

class Vendor extends CI_Controller{
  public function index()
  {
    $data['vendor'] = $this->model_vendor->tampil_data()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/vendor', $data);
    $this->load->view('templates/footer');
  }
  
  

  public function update($id){

$data = array(

      'status'  =>'verifikasi'
      

    );
      
    
    $where = array(
      'id_vendor' =>$id
  );
    $this->model_vendor->update_data($where,$data, 'vendor');
    redirect('admin/vendor/index');
  }
  
}

