<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_validation extends CI_Model {
	public function cekDataLogin($username, $password) {
		$this->db->select('UL.*, U.*');
		$this->db->from('user_login UL');
		$this->db->join('user U', 'UL.id_user = U.id_user', 'LEFT');
		$this->db->where('UL.username', $username);
		$this->db->where('UL.password', md5($password));
		$q = $this->db->get();

		if ($q->num_rows() > 0) {
			return $q->row();
		} else {
			return false;
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/models/Auth.php */