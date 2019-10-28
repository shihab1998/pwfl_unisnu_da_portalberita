<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($username,$password)
	{
		// hasil=mengambil data dari mongodb dimana username = username yang inputkan dan password = passwordyang diinputkan diambil dari tabel login
		$hasil = $this->db->where(array('username' => $username,'password' => $password ))->get('login');
		// jika hasil = benar maka mengembalikan nilai benar jika salah mengembalikan nilai salah
		if ($hasil) {
			return true;
		}else {
			return false;
		}
	}

}