<?php

class Mpengaduan extends CI_model
{


	public function check($id = '') {
		$this->db->where('id', $id); 
		$q = $this->db->get('pengaduan');
		return $q->row();
	}

	public function insert($data = null)
	{
		$this->db->insert('pengaduan', $data);
	}


	public function update($data = null, $id = null)
	{
		$this->db->where('id', $id);
		$this->db->update('pengaduan', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pengaduan');
	}

public function getJenis() {
		$this->db->select('*');
		$this->db->from('jenis_pengaduan');
		return $this->db->get()->result();
		
	}

	public function getjabat() {
		$this->db->select('*');
		$this->db->from('jabatan');
		return $this->db->get()->result();
	}

	public function getteknis() {
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}

	public function getpengaduan($id){
		$this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->where('id',$id);
		return $this->db->get()->result();	}


	public function dataPengaduan() {
		$this->db->select('P.* ,J.jabatan_name ,U.nama_lengkap,U.id_user');
		$this->db->from('pengaduan P');
		$this->db->join('user U','P.id_petugas= U.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		
		return $this->db->get()->result();
	}

	public function dataPengaduanby($id) {
		$this->db->select('P.*,J.*,U.nama_lengkap,U.id_user,JP.*');
		$this->db->from('pengaduan P');
		$this->db->join('user U','P.id_petugas= U.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		$this->db->join('jenis_pengaduan JP', 'JP.id_jenis = P.id_jenis', 'left');
		$this->db->where('P.id',$id);
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

	function alat(){
		$this->db->select('*');
		$this->db->from('alat');
		return $this->db->get()->result();
	}  
	
}