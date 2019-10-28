<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function login()
	{
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$validasi = $this->m_login->login($username,$password);
		if ($validasi == true) {
			$this->session->set_userdata('username',$username);
			redirect('dashboard/dashboardku');
		}else{
			redirect('dashboard');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('dashboard');
	}
}