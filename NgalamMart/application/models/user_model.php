<?php
// cara panggilnya : localhost/ci/index.php/user/index
// simpan di folder ci/application/controller

class user_model extends CI_Model {
	
	public function __construct(){
		$this->load->database();// koneksi database
	}

	public function get($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('tb_user');
		return $query->row();	
	}
	
}