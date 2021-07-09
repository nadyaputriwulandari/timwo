<?php
defined('BASEPATH') or exit('No direct script access allowed');

class shop extends CI_Controller
{
	public $username = null;
	function __construct()
	{
		parent::__construct();

		$this->username = $this->session->userdata('username');
		if ($this->session->userdata('username')) {
			// redirect('')
			//echo '<script> alert("Test")<script>';
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" align="center" >Anda harus login terlebih dahulu!</div>');
		}
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
		$this->load->view('user/header');
		$this->load->view('user/shop');
		$this->load->view('user/footer');
	}
}
