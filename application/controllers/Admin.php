<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
		$this->load->model("m_Product");
	}

	public function index() {

		$dataproduct = $this->m_Product->GetProduct();
		$this->load->view('Admin/crud_product',['dataproduct'=>$dataproduct]);
	}

	public function Create_Product() {
		
		$config['upload_path']          = './assets';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 1000;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('uploadImage')){
			$error = array('error' => $this->upload->display_errors());
				redirect('/');
		} 

		else {
			$data = [
				'gambar' => $this->upload->data()['file_name'],
				'product_name' => $this->input->post('product_name'),
				'harga' => $this->input->post('harga')
			];

			$insert = $this->m_Product->insert_new_product($data);
			if(!$insert) {
				$error = array('error' => $this->upload->display_errors());
				redirect('Welcome');
			}

			else {
				redirect('/Admin');
			}
		}
	}

	public function hapusproduct($id) {

		if(!isset($id)) show_404();
		var_dump($id);
		if($this->m_Product->hapus_Product($id)) {
			redirect('/Admin');
		}
	}

	public function editproduct() {

		$config['upload_path']          = './assets';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 1000;

		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		$id = $this->input->post('id', true);
		if(!$this->upload->do_upload('uploadImage')){
			$data = [
				'product_name' => $this->input->post('product_name'),
				'harga' => $this->input->post('harga')
			];
			$result = $this->m_Product->edit_Product($id, $data);
			if($result) { 
								
				redirect('/Admin');
			}
			else {
				$error = array('error' => $this->upload->display_errors());
					redirect('/');
			}
		} 

		else {
			$data = [
				'gambar' => $this->upload->data()['file_name'],
				'product_name' => $this->input->post('product_name'),
				'harga' => $this->input->post('harga')
			];
			
			$result = $this->m_Product->edit_Product($id, $data);
			if($result) { 

				redirect('/Admin');
			} 
			else {

				$error = array('error' => $this->upload->display_errors());
					redirect('/');
			}
		}
	
	}
}
