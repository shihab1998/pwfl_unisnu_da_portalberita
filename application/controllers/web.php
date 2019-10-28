<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller 
{
	public function index()
	{
		$data['berita'] = $this->m_berita->lihatBerita();
		$this->load->view('web/beranda',$data);
	}
	public function dashboardku()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard_v');
		$this->load->view('footer');
	}

}