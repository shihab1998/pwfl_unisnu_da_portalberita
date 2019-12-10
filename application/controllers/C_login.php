<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function index(){
		$this->load->view('hal_login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$validasi = $this->m_login->login($username,$password);
		if ($validasi != false) {
			$this->session->set_userdata('username',$username);
			redirect('dashboard/');
		}else{
			redirect('c_login/');
		}

	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('c_login');
	}
}