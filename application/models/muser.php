<?php

class Muser extends CI_model
{
	public function check($kode_sup = '') {
		$this->db->select('id_user');
		$this->db->where('id_user', $kode_sup); 
		$q = $this->db->get('user');
		return $q->row();
	}
	public function checkadmin($kode_sup = '') {
		$this->db->select('id_user');
		$this->db->where('id_user', $kode_sup); 
		$q = $this->db->get('user_login');
		return $q->row();
	}

	public function insert($data = null)
	{
		$this->db->insert('user', $data);
	}
	
	public function insertadmin($data = null)
	{
		$this->db->insert('user_login', $data);
	}

	public function update($data = null, $id = null)
	{
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}

	public function updateadmin($data = null, $id = null)
	{
		$this->db->where('id_user', $id);
		$this->db->update('user_login', $data);
	}
	public function deleteadmin($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('user_login');
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
	public function getUserData($id) {
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('user')->result();
	}
	public function getJabatan() {
		$this->db->select('*');
		$this->db->from('jabatan');
		return $this->db->get()->result();
	}
	public function getJabatanExAdmin() {
		$this->db->select('*');
		$this->db->where('id_jabatan !=',1);
		return $this->db->get('jabatan')->result();
	}
	public function getUser($id) {
		$this->db->select('*');
		$this->db->where('id_user',$id);
		return $this->db->get('user')->result();
	}
	public function getAdmin($id) {
		$this->db->select('*');
		$this->db->where('id_user',$id);
		return $this->db->get('user_login')->result();
	}
	public function dataUser() {
		$this->db->select('U.*, J.jabatan_name');
		$this->db->from('user U');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		return $this->db->get()->result();
	}
	public function getUP($id){
		$this->db->select('U.*, J.*');
		$this->db->from('user U');
		$this->db->join('user_login J', 'J.id_user = U.id_user', 'left');
		$this->db->where('U.id_user', $id);
		return $this->db->get()->result();
	}
	function delete_checked($checked_messages)   
	{  
    		$delete = $checked_messages;
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('user');
			}
	}  
	
}
