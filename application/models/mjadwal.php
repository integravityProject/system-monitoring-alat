<?php

class Mjadwal extends CI_model
{
	public function insert($data = null)
	{
		$this->db->insert('jadwal_maintenance', $data);
	}
	
	public function update($data = null, $id = null)
	{
		$this->db->where('id_kegiatan', $id);
		$this->db->update('jadwal_maintenance', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_kegiatan', $id);
		$this->db->delete('jadwal_maintenance');
	}
	public function getPenjadwalan($id){
		$this->db->select('id_kegiatan,id_periode_maintenance,kegiatan');
		$this->db->where('id_kegiatan',$id);
		return $this->db->get('jadwal_maintenance')->result();
	}
	public function getJadwal($id) {
		$this->db->select('*');
		$this->db->where('id_periode_maintenance',$id);
		return $this->db->get('jadwal_maintenance')->result();
	}
	public function getJadwaledit($id) {
		$this->db->select('*');
		$this->db->where('id_kegiatan',$id);
		return $this->db->get('jadwal_maintenance')->result();
	}
	public function getJadwalCount($id) {
		$this->db->select('count(id_kegiatan) as jumlah');
		$this->db->where('id_periode_maintenance',$id);
		return $this->db->get('jadwal_maintenance')->result()[0]->jumlah;
	}
	public function dataJadwal() {
		$this->db->select('*');
		return $this->db->get('jadwal_maintenance')->result();
	}
	public function dataUser() {
		$this->db->select('U.*, J.jabatan_name');
		$this->db->from('user U');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		return $this->db->get()->result();
	}
	
	
}
