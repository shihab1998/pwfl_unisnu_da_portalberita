<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	public function lihatBerita()
	{
		$query = $this->db->get('tbl_berita');
		return $query->result_array();
	}

	public function tambahBerita(){
		$data = array(
			'judul_berita' => $this->input->post('judul'),
			'keterangan_berita' => $this->input->post('keterangan'),
			'narasumber' => $this->input->post('narasumber'),
			'penerbit' => $this->input->post('penerbit'),
		);
		return $this->db->insert('tbl_berita',$data);
	}

	public function ubahBerita($id){
		$data = array(
			'judul_berita' => $this->input->post('judul'),
			'keterangan_berita' => $this->input->post('keterangan'),
			'narasumber' => $this->input->post('narasumber'),
			'penerbit' => $this->input->post('penerbit'),
		);
		return $this->db->update('tbl_berita',$data);
	}

	public function detailBerita($id){
		$this->db->where('id',$id);
		$query = $this->db->get('tbl_berita');
		return $query->result_array();
	}

	public function hapusBerita($id){
		return $this->db->delete('tbl_berita',array('id' =>$id));
	}

}