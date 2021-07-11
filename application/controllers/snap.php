<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-L4c6BF_MZ-jfhzsoU-2MV5zU', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->model('model_transaksi');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function token()
	{
		$total = $this->input->post('total');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $total, // no decimal allowed for creditcard
		);
		foreach ($this->cart->contents() as $items) :
			$item_details[] = array(
				'id' => $items['id'],
				'price' => $items['price'],
				'quantity' => 1,
				'name' => $this->cart->product_options($items['rowid'])['Nama_Vendor'] . '(' . $items['name'] . ')'
			);
		endforeach;


		// Optional
		$billing_address = array(
			'first_name'    => $nama,
			'last_name'     => "",
			'address'       => $alamat,
			'phone'         => $no_hp,
		);

		// Optional
		$shipping_address = array(
			'first_name'    => $nama,
			'last_name'     => "",
			'address'       => $alamat,
			'phone'         => $no_hp,
		);

		// Optional
		$customer_details = array(
			'first_name'    => $nama,
			'last_name'     => "",
			'email'         => $email,
			'phone'         => $no_hp,
			'billing_address'  => $billing_address,
			'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'day',
			'duration'  => 1
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'), true);
		// var_dump($result);
		// echo strtotime($result['transaction_time']);
		// echo '<br>';
		// echo date('Y-m-d H:i:s', strtotime($result['transaction_time']));
		// echo '<br>';
		// echo date('Y-m-d H:i:s', strtotime($result['transaction_time']) + (60 * 60 * 24));
		// die();
		$data = [
			'order_id' => $result['order_id'],
			'id_user' => $this->input->post('id_username'),
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => strtotime($result['transaction_time']),
			'bank' => $result['va_numbers'][0]['bank'],
			'va_numbers' => $result['va_numbers'][0]["bank"],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['transaction_status'],
		];
		$this->model_transaksi->input_data($data);

		date_default_timezone_set('Asia/Jakarta');
		// $id = $this->input->post('id_username');
		// $nama = $this->input->post('nama');
		// $email = $this->input->post('email');
		// $no_hp = $this->input->post('no_hp');
		// $alamat = $this->input->post('alamat');
		// $order_id = $result['order_id'];

		// $booking = array(
		// 	'nama_vendor' => $id,
		// 	'email' => $email,
		// 	'no_hp' => $no_hp,
		// 	'alamat' => $alamat,
		// 	'tgl_pembayaran' => date('Y-m-d H:i:s'),
		// 	'tgl_expired' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
		// 	'dp' => 0,
		// 	'pelunasan' => 0,
		// 	'status' => 0
		// );
		// $this->db->insert('book', $booking);
		// $id_book = $this->db->insert_id();
		// // var_dump($id_invoice);
		foreach ($this->cart->contents() as $item) {
			$data = array(
				'order_id' => $result['order_id'],
				'id_paket' => $item['id'],
				'harga' =>  $item['price'],
				'jumlah' =>  $item['qty'],
				'tgl_acara' => $this->cart->product_options($item['rowid'])['Tgl'],
				'status_pesanan' => 0
			);
			$this->db->insert('tb_pesanan', $data);
		}
		$this->session->set_flashdata('msg_sukses', '<div class="alert alert-success" align="center" role="alert">Transaksi Berhasil</div>');
		$this->cart->destroy();
		echo "<script> alert('Transaksi Berhasil, silahkan lakukan pembayaran');</script>";
		echo "<script> window.location='" . base_url('user/keranjang') . "';</script>";
		// echo 'RESULT <br><pre>';
		// var_dump($result);
		// var_dump($data);
		// echo '</pre>';
	}
}
