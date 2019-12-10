<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($username,$password){
		$hasil = $this->db->where('username',$username)
						 					->where('password',$password)
						 					->limit(1)
						 					->get('tbl_users');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		}else {
			return false;
		}
	}

}