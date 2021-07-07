<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class catering extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_catering');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['catering'] = $this->model_vendor->tampil_data_by_vendor("CTR")->result();
		//var_dump($data);
		//die();
        $this->load->view('user/header');
		$this->load->view('user/catering', $data);
        $this->load->view('user/footer');
	}
}
