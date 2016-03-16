<?php

class Mpengecekan extends CI_model
{
	public function dataUser(){
		$data = $this->db->query("SELECT * from user");
		return $data->result();
	}
	public function dataAlat()
	{
		$this->db->select('*');
		$this->db->from('alat');
		return $this->db->get()->result();
	}	
	public function getData($id,$tgl,$id_petugas){
		$this->db->select('id_kegiatan,status_verifikasi,verifikator,tgl_verifikasi,updated_at');
		$this->db->where('id_kegiatan', $id);
		$this->db->where('tgl_verifikasi', $tgl);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->from('pengecekan_alat');
		return $this->db->get()->result();
	}
	public function getTahun(){
		$data = $this->db->query("SELECT year(updated_at) as tahun FROM t_history GROUP by year(updated_at)");
		return $data->result();
	}
	public function getLastMon($thn,$bln){
		if($bln==1||$bln==3||$bln==5||$bln==7||$bln==8||$bln==10||$bln==12){
			$max=31;
		}else{
			if($thn%4==0 && $bln==2){
				$max=29;
			}else if($thn%4!=0 && $bln==2){
				$max=28;
			}else{
				$max=30;
			}
		}
		return $max;		
	}

	public function insert($data = null)
	{
		$this->db->insert('pengecekan_alat', $data);
	}
	public function update($data = null,$id_kegiatan=null,$tgl =null,$id_alat=null,$id_petugas=null)
	{
		$this->db->where('tgl_verifikasi', $tgl);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->where('id_alat', $id_alat);
		$this->db->update('pengecekan_alat', $data);
	}


	public function getKegiatan($id) {
		$this->db->select('*');
		$this->db->where('id_periode_maintenance', $id);
		$this->db->from('jadwal_maintenance');
		return $this->db->get()->result();
	}
	
	public function cekMingguSekarang($id_kegiatan,$tahunke,$bulanke,$mingguKe,$id_alat,$id_petugas){
		$tanggal=$tahunke."-".$bulanke."-".$mingguKe;
		$this->db->select('*');
		$this->db->where('tgl_verifikasi', $tanggal);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->where('id_alat', $id_alat);
		$this->db->where('status_verifikasi', 2);
		$this->db->from('pengecekan_alat');
		$q=$this->db->get()->num_rows();
		if($q==0){
			return 0;
		}else{
			return 1;
		}
	}
	public function cekAdaMinggu($id_kegiatan,$tanggal,$id_alat,$id_petugas){ //cek apakah tgl dengan id_kategori ada pada tabel?, dilakukan saat proses ganti status
		
		$this->db->select('*');
		$this->db->where('tgl_verifikasi', $tanggal);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->where('id_alat', $id_alat);
		$this->db->where('id_periode_maintenance', 2);
		$this->db->from('pengecekan_alat');
		$q=$this->db->get()->num_rows();
		if($q==0){
			return 0;
		}else{
			return 1;
		}
	}
	

	public function getMingguKe($tgl){
		if($tgl>0 && $tgl<9){
			return 1;
		}else if($tgl>8 && $tgl<17){
			return 2;
		}else if($tgl>16 && $tgl<25){
			return 3;
		}else{
			return 4;
		}
	}

	public function cekHariSekarang($id_kegiatan,$tahunke,$bulanke,$tgl,$id_alat,$id_petugas){
		$tanggal=$tahunke."-".$bulanke."-".$tgl;
		$this->db->select('*');
		$this->db->where('tgl_verifikasi', $tanggal);
		$this->db->where('id_alat', $id_alat);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->where('status_verifikasi', 2);
		$this->db->from('pengecekan_alat');
		$q=$this->db->get()->num_rows();
		if($q==0){
			return 0;
		}else{
			return 1;
		}
	}
	//model untuk bulanan
	public function cekSekarang($id_kegiatan,$tahunke,$bulanke,$id_alat,$id_petugas){
		$tanggal=$tahunke."-".$bulanke."-1";
		$this->db->select('*');
		$this->db->where('tgl_verifikasi', $tanggal);
		$this->db->where('id_alat', $id_alat);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->where('status_verifikasi', 2);
		$this->db->from('pengecekan_alat');
		$q=$this->db->get()->num_rows();
		if($q==0){
			return 0;
		}else{
			return 1;
		}
	}
	public function cekAdaBulan($id_kegiatan,$tanggal,$id_alat,$id_petugas){ //cek apakah tgl dengan id_kategori ada pada tabel?, dilakukan saat proses ganti status
		
		$this->db->select('*');
		$this->db->where('tgl_verifikasi', $tanggal);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->where('id_alat', $id_alat);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->where('id_periode_maintenance', 3);
		$this->db->from('pengecekan_alat');
		$q=$this->db->get()->num_rows();
		if($q==0){
			return 0;
		}else{
			return 1;
		}
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