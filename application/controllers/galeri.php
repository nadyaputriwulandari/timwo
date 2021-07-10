<?php
defined('BASEPATH') or exit('No direct script access allowed');

class galeri extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model');
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
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/timwo/galeri/index';
		$config['total_rows'] = $this->galeri_model->hitung();
		$config['per_page'] = 9;


		//style
		$config['full_tag_open'] = '<nav> <ul class="pagination pagination-lg">';
		$config['full_tag_close'] = '</nav> </ul>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';


		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';


		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		//echo $this->pagination->create_links();
		$data['start'] = $this->uri->segment(3);
		$data['galeri'] = $this->galeri_model->tampil($config['per_page'], $data['start']);


		$this->load->view('user/header');
		$this->load->view('user/galeri', $data);
		$this->load->view('user/footer');
	}

	public function load_galeri()
	{
		$kategori_vendor = $_GET['kategori_vendor'];
		$data = $this->db->get_where('galeri', ['kategori' => $kategori_vendor])->result();
		echo $data;
		foreach ($data as $gal) : ?>
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<span class="maxproduct"><img src="<?php echo base_url('assets_user/images/' . $gal['gambar']) ?>"> </span>
					</div>

				</div>
			</div>
		<?php endforeach ?>
<?php
	}
}
