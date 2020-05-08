<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$this->load->model("m_Login");
		$this->load->model("m_product");
	}

	public function index() {
		// $this->load->view('welcome_message');
		$this->load->view('Users/Template/header');
		//$this->load->view('Users/Home/Home');
		$dataproduct= $this->m_product->GetProduct();
		$this->load->view('Users/Home/Home',['dataproduct'=>$dataproduct]);
	}

	public function Login() {

		if ($this->input->method() == 'post') {
			$data = ['username' => $this->input->post('uname'), 
					 'password' => $this->input->post('pw')];
			
			if ($this->m_Login->login($data)) {
					$this->session->set_userdata('username', $data['username']);
                	redirect('/After');
            }
            else {
				$this->load->view('Users/Template/header');
                $this->load->view('Users/Login/Login', ['error_msg' => 'Username atau Password yang Anda Masukkan Salah']);
            }
		}

		else {
			$this->load->view('Users/Template/header');
			$this->load->view('Users/Login/Login');
		}
		
	}

	public function Signup() {

		if ($this->input->method() == 'post') {
			$data = [
				'nama' => $this->input->post('nama'), 
				'username' => $this->input->post('uname'), 
				'password' => $this->input->post('pw'), 
				'status' => 0];

			if ($this->m_Login->signup($data)) {
				$this->session->set_userdata('username', $data['username']);
                redirect('/');
            } 
            else {
				$this->load->view('Users/Template/header');
                $this->load->view('Users/Login/Login', ['error_msg' => 'Username atau Password yang Anda Masukkan Salah']);
            }
		}

		else {
			$this->load->view('Users/Template/header');
			$this->load->view('Users/Signup/Signup');
		}
	}

	public function Admin_users() {
		
		$data9= $this->m_Login->GetAllUser();
		$this->load->view('Admin/crud_user',['datauser'=>$data9]);
		
	}

	public function hapususers($id) {

		if(!isset($id)) show_404();
		var_dump($id);
		if($this->m_Login->hapus_User($id)) {
			redirect('welcome/Admin_users');
		}
	}

	public function edit_users() {

		$id = $this->input->post('id', true);
		$data = ['nama' => $this->input->post('nama'), 'username' => $this->input->post('username'), 'password' => $this->input->post('password'), 'status' => 0];
		if ($this->m_Login->edit_Users($id, $data)) {
			redirect('/Welcome/Admin_users');
		} else {
			redirect('/');
		}
	}

	public function info()
	{
		$url = "./application/views/Users/json/biodata.json";
		$get_url = file_get_contents($url);
		$data = json_decode($get_url);

		$data_array = array(
			'infodata' => $data
		);
		$this->load->view('Users/json/info', $data_array);
		//$this->load->view('Users/Author/ViewAuthor');
	}
}