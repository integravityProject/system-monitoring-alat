<?php

class Mabsensi extends CI_model
{
	public function check($id = '') {
		$this->db->where('id', $id); 
		$q = $this->db->get('absensi');
		return $q->row();
	}

	public function insert($data = null)
	{
		$this->db->insert('absensi', $data);
	}


	public function update($data = null, $id = null)
	{
		$this->db->where('id', $id);
		$this->db->update('absensi', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('absensi');
	}

	public function getAbsensi($id){
		$this->db->select("id_petugas,absen,tgl,keterangan,created_by");
		$this->db->where("id",$id);
		$data=$this->db->get('absensi')->result();
		return $data;
	}
	public function getName($id){
		$this->db->select("*");
		$this->db->where("id_user",$id);
		$data=$this->db->get('user')->result();
		return $data[0]->nama_lengkap;
	}
	public function getjabat() {
		$this->db->select('a.*,j.jabatan_name,u.nama_lengkap,j.id_jabatan');
		$this->db->from('absensi a');
		$this->db->join('user u','a.id_petugas=u.id_user');
		$this->db->join('jabatan j','u.jabatan=j.id_jabatan');
		return $this->db->get()->result();
	}

	public function getjabatan() {
		$this->db->select('*');
		$this->db->from('jabatan');
		return $this->db->get()->result();
	}

	public function getteknis() {
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}


	public function dataabsensi() {
		$this->db->select('P.* ,J.jabatan_name ,U.nama_lengkap');
		$this->db->from('absensi P');
		$this->db->join('user U','P.id_petugas= U.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		
		return $this->db->get()->result();
	}

	public function dataabsenby($id){
		$this->db->select('P.* ,J.jabatan_name ,U.nama_lengkap');
		$this->db->from('absensi P');
		$this->db->join('user U','P.id_petugas= U.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		$this->db->where('id_user',$id);
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