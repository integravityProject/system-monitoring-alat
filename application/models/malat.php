<?php

class Malat extends CI_model
{
	public function check($kode_sup = '') {
		$this->db->select('id_alat');
		$this->db->where('id_alat', $kode_sup); 
		$q = $this->db->get('alat');
		return $q->row();
	}
	public function checkadmin($kode_sup = '') {
		$this->db->select('id_alat');
		$this->db->where('id_alat', $kode_sup); 
		$q = $this->db->get('alat');
		return $q->row();
	}

	public function insert($data = null)
	{
		$this->db->insert('alat', $data);
	}
	
	public function update($data = null, $id = null)
	{
		$this->db->where('id_alat', $id);
		$this->db->update('alat', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_alat', $id);
		$this->db->delete('alat');
	}
	public function getAlat($id) {
		$this->db->select('*');
		$this->db->where('id_alat',$id);
		return $this->db->get('alat')->result();
	}

	public function dataAlat() {
		$this->db->select('*');
		$this->db->from('alat');
		return $this->db->get()->result();
	}

}
