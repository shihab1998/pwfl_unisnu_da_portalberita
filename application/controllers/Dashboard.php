<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Hal_login');
	}
	public function dashboardku()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard_v');
		$this->load->view('footer');
	}

}