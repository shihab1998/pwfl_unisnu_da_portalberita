<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard_v');
		$this->load->view('footer');
	}

	public function tambahberita(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('tambahberita');
		$this->load->view('footer');
	}

	public function lihatberita(){
		$data['lihatberita'] = $this->m_berita->lihatBerita();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('lihatberita',$data);
		$this->load->view('footer');
	}

	public function detailberita($id){
		$data['berita'] = $this->m_berita->detailBerita($id);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('detailberita',$data);
		$this->load->view('footer');
	}

	public function ubahberita($id){
		$data['berita'] = $this->m_berita->detailBerita($id);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('ubahberita',$data);
		$this->load->view('footer');
	}

	public function hapusberita($id){
		$this->m_berita->hapusBerita($id);
		redirect('dashboard/lihatberita');
	}

	public function prosestambahberita(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');
		$this->form_validation->set_rules('narasumber','narasumber','required');
		$this->form_validation->set_rules('penerbit','penerbit','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('dashboard/tambahberita');
		}else {
			$this->m_berita->tambahBerita();
			redirect('dashboard/lihatberita');
		}
	}

	public function prosesubahberita($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');
		$this->form_validation->set_rules('narasumber','narasumber','required');
		$this->form_validation->set_rules('penerbit','penerbit','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('dashboard/tambahberita');
		}else {
			$this->m_berita->ubahBerita($id);
			redirect('dashboard/lihatberita');
		}
	}

}