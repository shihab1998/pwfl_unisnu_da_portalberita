<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	public function lihatBerita()
	{
		$query = $this->db->get('berita');
		return $query->result_array();
	}

}