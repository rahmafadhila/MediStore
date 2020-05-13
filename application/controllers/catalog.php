<?php
defined('BASEPATH') or exit('No direct script access allowed');

class catalog extends CI_Controller
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->model("m_product");
	}

	public function index() {
	
		$dataproduct = $this->m_product->GetProduct();
		$this->load->view('Users/Login/Home',['dataproduct'=>$dataproduct]);
	}
	
	function tambahkan_cart() { 

		$data = array(
			'id' => $this->input->post('produk_id'), 
			'name' => $this->input->post('produk_nama'), 
			'price' => $this->input->post('produk_harga'), 
			'qty' => $this->input->post('jumlah'), 
		);
		$this->cart->insert($data);
		echo $this->tampilkan_cart(); 
	}

	function tampilkan_cart() {

		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Delete</button></td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	}

	function load_cart() {

		echo $this->tampilkan_cart();
	}

	function clear() {

		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);

		$this->cart->destroy();
		echo $this->tampilkan_cart();
	}

	function hapus_cart() {  
		
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->tampilkan_cart();
	}
}

