<?php

/**
 * 
 */
class Daftar_vendor extends CI_Controller
{

    function __construct(){
		parent::__construct();
		$this->load->model('daftar_vendor_model');
	}

	public function index()
	{

		$this->load->view('vendor/daftar_vendor');
    }
    
    public function input()
	{
		$data = array(

			'nama_vendor'	=> set_value('nama_vendor'),
            'kategori_vendor' => set_value('kategori_vendor'),
            'no_telp_vendor' => set_value('no_telp_vendor'),
            'alamat_vendor' => set_value('alamat_vendor'),

		);
        $this->load->view('vendor/daftar_vendor');
    }
    
    public function input_aksi()
	{
			$data = array(
				'nama_vendor' => $this->input->post('nama_vendor', TRUE),
                'kategori_vendor'	=> $this->input->post('kategori_vendor', TRUE),
                'no_telp_vendor'	=> $this->input->post('no_telp_vendor', TRUE),
				'alamat_vendor'	=> $this->input->post('alamat_vendor', TRUE),
			);

			$this->daftar_vendor_model->input_data($data);
		
			redirect('vendor/daftar_vendor');
		
	}
}
?>