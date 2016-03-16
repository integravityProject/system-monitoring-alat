<?php

class mprofil extends CI_model
{
	

	public function insert($data = null)
	{
		$this->db->insert('user', $data);
	}

	public function update($data = null,$data1 =null, $id = null)
	{
		$this->db->where('id_user', $id);
		$this->db->update('user',$data1);
		$this->db->update('user_login', $data);
		
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}


	public function view() {
		$this->db->select('*');
		$this->db->from('user');  
		return $this->db->get()->result();
	}

	public function check($pass = '') {
		$this->db->where('password', $pass); 
		$q = $this->db->get('user_login');
		return $q->row();
	}

	public function getpass($pass=''){
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('password', $pass); 
		$g=$this->db->get();
		
		if ($g->num_rows() > 0) {
			return true;
		} else {
			return false;
		}

	}
	public function getUser($pass=''){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $pass); 
		return $this->db->get();
		
	}
}
