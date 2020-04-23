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

	function __construct(){
		parent::__construct();
		$this->load->model("m_Login");
	}

	public function index(){
		// $this->load->view('welcome_message');
		$this->load->view('Users/Template/header');
		$this->load->view('Users/Home/Home');
	}

	public function Login(){

		//$message="Username atau Password yang Anda Masukkan Salah";

		if ($this->input->method() == 'post') {
			$data = ['username' => $this->input->post('uname'), 'password' => $this->input->post('pw')];
			
			if ($this->m_Login->login($data)) {
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
			$this->load->view('Users/Login/Login');
		}
		
	}

	public function Signup(){

		if ($this->input->method() == 'post') {
			$data = ['nama' => $this->input->post('nama'), 'username' => $this->input->post('uname'), 'password' => $this->input->post('pw'), 'status' => 0];

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

	public function Cart(){
		// $this->load->view('welcome_message');
		//$this->load->view('Admin/header');
		$this->load->view('Cart/crud_cart');
	}

	public function Admin(){
		// $this->load->view('welcome_message');
		//$this->load->view('Admin/header');
		$this->load->view('Admin/crud_user');
	}
}