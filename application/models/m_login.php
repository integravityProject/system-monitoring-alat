<?php

class m_login extends CI_Model {

	public function toUpdateUser($username, $data) {
		$d = $this->db->where('username', $username);
		$d = $this->db->update('user_login', $data);
		return $d;
	}

	public function cekDataLogin($username, $password) {
		$this->db->select('UL.*, U.*');
		$this->db->from('user_login UL');
		$this->db->join('user U', 'UL.id_user = U.id_user', 'LEFT');
		$this->db->where('UL.USERNAME', $username);
		$this->db->where('UL.PASSWORD', md5($password));
		$q = $this->db->get();

		if ($q->num_rows() > 0) {
			return $q->result();
		} else {
			return false;
		}
	}

}

?>