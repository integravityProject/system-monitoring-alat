<?php
class mmaster extends CI_model {
	function getDataAll($table, $limit = NULL, $offset = NULL) {		
		$sql = $this->db->get($table, $limit, $offset);
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return 0;
		}
	}

	
	function getCountDataAll($table, $limit = NULL, $offset = NULL) {
		$this->db->select('count(id) count');
		$sql = $this->db->get($table, $limit, $offset);
		if ($sql->num_rows() > 0) {
			return $sql->row()->count;
		} else {
			return 0;
		}
	}

	function getDataCustom($table, $select = "*", $where = "", $limit = NULL, $offset = NULL) {
		if (is_array($where)) {
			// get keys of array
			$conds = array();
			foreach (array_keys($where) as $idx) {
				array_push($conds, $idx);
			}
			// inject where condition
			$i = 0;
			foreach ($where as $cond) {
				$this->db->where($conds[$i], $cond);
				$i++;
			}
		} else {
			// nothing to do
		}
		$this->db->select($select);
		$sql = $this->db->get($table, $limit, $offset);
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return 0;
		}
	}

	function getDataCustomRow($table, $select = "*", $where = "", $limit = NULL, $offset = NULL) {
		if (is_array($where)) {
			// get keys of array
			$conds = array();
			foreach (array_keys($where) as $idx) {
				array_push($conds, $idx);
			}
			// inject where condition
			$i = 0;
			foreach ($where as $cond) {
				$this->db->where($conds[$i], $cond);
				$i++;
			}
		} else {
			// nothing to do
		}
		$this->db->select($select);
		$sql = $this->db->get($table, $limit, $offset);
		if ($sql->num_rows() > 0) {
			return $sql->row();
		} else {
			return 0;
		}
	}

	function getCountDataCustom($table, $where = "") {
		if (is_array($where)) {
			// get keys of array
			$conds = array();
			foreach (array_keys($where) as $idx) {
				array_push($conds, $idx);
			}
			// inject where condition
			$i = 0;
			foreach ($where as $cond) {
				$this->db->where($conds[$i], $cond);
				$i++;
			}
		} else {
			// nothing to do
		}
		$this->db->select("count(id) count");
		$this->db->get($table);
		if ($sql->num_rows() > 0) {
			return $sql->row()->count;
		} else {
			return 0;
		}
	}

	function setHistory($aksi = '', $keterangan = '')
	{
		$this->load->model('master');
		$user = $this->master->getCurrentUser()->id_user;
		$data = array(
			'id_user' => $user,
			'aksi' => $aksi,
			'keterangan' => $keterangan,
			'ip' => $_SERVER['REMOTE_ADDR'],
			'mac_address' => $_SERVER['REMOTE_ADDR'],
			'nama_host' => gethostname()			
			 );
		$this->db->insert('t_history', $data);
	}

	function getpengaduan(){
		$this->db->select('p.*,jp.pengaduan,u.nama_lengkap,a.lokasi');
		$this->db->from('pengaduan p');
		$this->db->join('jenis_pengaduan jp','jp.id_jenis=p.id_jenis','left');
		$this->db->join('alat a','a.id_alat=p.kode_unit_parkir','left');
		$this->db->join('user u','u.id_user=p.id_petugas','left');
		return $this->db->get()->result();
	}

	function getpengaduanmain($nama,$kode,$lok,$jen){
		$this->db->select('p.*,jp.pengaduan,u.nama_lengkap,a.lokasi');
		$this->db->from('pengaduan p');
		$this->db->join('jenis_pengaduan jp','jp.id_jenis=p.id_jenis','left');
		$this->db->join('alat a','a.id_alat=p.kode_unit_parkir','left');
		$this->db->join('user u','u.id_user=p.verifikator','left');
		if($nama!=""){
		$this->db->where('p.verifikator',$nama);
		}
		if($kode!=""){
		$this->db->where('p.kode_unit_parkir',$kode);}
		if($lok!=""){
		$this->db->where('a.lokasi',$lok);}
		if($jen!=""){
		$this->db->where('p.id_jenis',$jen);
		}
		return $this->db->get()->result();
	}

	function getpengaduanmain1($nama,$kode,$lok,$jab){
		$this->db->select('p.*,jp.pengaduan,u.nama_lengkap,a.lokasi');
		$this->db->from('pengaduan p');
		$this->db->join('jenis_pengaduan jp','jp.id_jenis=p.id_jenis','left');
		$this->db->join('alat a','a.id_alat=p.kode_unit_parkir','left');
		$this->db->join('user u','u.id_user=p.verifikator','left');
		$this->db->join('jabatan j','j.id_jabatan=u.jabatan','left');
		if($jab!=""){
		$this->db->where('j.id_jabatan',$jab);}
		if($nama!=""){
		$this->db->where('p.verifikator',$nama);}
		if($kode!=""){
		$this->db->where('p.kode_unit_parkir',$kode);}
		if($lok!=""){
		$this->db->where('a.lokasi',$lok);}
	
		return $this->db->get()->result();
	}

	function getpengecekan_alat($pm,$lok,$jab,$nama,$kode,$ver)
	{
		$this->db->select('p.*,a.*,u.*,mp.*');
		$this->db->from('pengecekan_alat p');
		$this->db->join('alat a','a.id_alat=p.id_alat','left');
		$this->db->join('user u','u.id_user=p.id_petugas','left');
		$this->db->join('master_periode_maintenance mp','p.id_periode_maintenance=mp.id_periode_maintenance','left');
		if($pm!=""){
		$this->db->where('p.id_periode_maintenance',$pm);}
		if($nama!=""){
		$this->db->where('p.id_petugas',$nama);}
		if($kode!=""){
		$this->db->where('p.id_alat',$kode);}
		if($lok!=""){
		$this->db->where('a.lokasi',$lok);}
		if($jab!=""){
		$this->db->where('u.jabatan',$jab);
		}
		if($ver!=""){
		$this->db->where('p.status_verifikasi',$ver);
		}
		return $this->db->get()->result();
	}

	function getkondisi($lokasi,$kode,$kon){
		$this->db->select('a.*,p.*');
		$this->db->from('alat a');
		$this->db->join('pengaduan p','a.id_alat=p.kode_unit_parkir','left');
		if($lokasi!=""){
			$this->db->where('a.lokasi',$lokasi);	
		}
		if($kode!=""){
			$this->db->where('a.id_alat',$kode);	
		}
		if($kon!=""){
			$this->db->where('p.id_jenis',$kon);	
		}
		return $this->db->get()->result();
	}

	function getpengecekan($kode,$lok){
		$this->db->select('pa.*,a.*');
		$this->db->from('pengecekan_alat pa');
		$this->db->join('alat a');
		if($kode!=""){
		$this->db->where('pa.kode_unit_parkir',$kode);}
		if($lok!=""){
		$this->db->where('a.lokasi',$lok);
		}
		return $this->db->get()->result();
	}

	public function getjabpengaduan() {
		$a=$this->db->query('select * from jabatan where id_jabatan=3 or id_jabatan=4');
		return $a->result();
	}

	function alat(){
		$this->db->select('*');
		$this->db->from('alat');
		return $this->db->get()->result();
	}  




	function getperiode(){
		$this->db->select('*');
		$this->db->from('master_periode_maintenance');
		return $this->db->get()->result();
	}

	function getuser()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}

	function getlokasi(){
		$this->db->select('*');
		$this->db->from('master_lokasi');
		return $this->db->get()->result();
	}

	function absen(){
		$this->db->select('P.* ,J.jabatan_name ,U.nama_lengkap');
		$this->db->from('absensi P');
		$this->db->join('user U','P.id_petugas= U.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		return $this->db->get()->result();
	}

	function filterabsen($id){

		$this->db->select('P.* ,J.jabatan_name ,U.nama_lengkap');
		$this->db->from('absensi P');
		$this->db->join('user U','P.id_petugas= U.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		$this->db->where('id_petugas',$id);
		return $this->db->get()->result();	
	}

	function filterjab($jab){

		$this->db->select('P.* ,J.jabatan_name ,U.nama_lengkap');
		$this->db->from('absensi P');
		$this->db->join('user U','P.id_petugas= U.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = U.jabatan', 'left');
		$this->db->where('U.jabatan',$jab);
		return $this->db->get()->result();	
	}


	function pengecekanmain($main){
		$this->db->select('pa.* , u.nama_lengkap,mpm.periode');
		$this->db->from('pengecekan_alat pa');
		$this->db->join('master_periode_maintenance mpm','mpm.id_periode_maintenance=pa.id_periode_maintenance','left');
		$this->db->join('user u','pa.verifikator=u.id_user','left');
		$this->db->where('mpm.id_periode_maintenance',$main);
		return $this->db->get()->result();
	}

	function pengecekan1main($id,$main){
		$this->db->select('pa.* , u.nama_lengkap,mpm.periode');
		$this->db->from('pengecekan_alat pa');
		$this->db->join('master_periode_maintenance mpm','mpm.id_periode_maintenance=pa.id_periode_maintenance','left');
		$this->db->join('user u','pa.verifikator=u.id_user','left');
		$this->db->where('verifikator',$id);
		$this->db->where('mpm.id_periode_maintenance',$main);
		return $this->db->get()->result();
	}

	function pengecekanfiltermain($jab,$main){
		$this->db->select('pa.* , u.nama_lengkap,mpm.periode');
		$this->db->from('pengecekan_alat pa');
		$this->db->join('master_periode_maintenance mpm','mpm.id_periode_maintenance=pa.id_periode_maintenance','left');
		$this->db->join('user u','pa.verifikator=u.id_user','left');
		$this->db->join('jabatan J', 'J.id_jabatan = u.jabatan', 'left');
		$this->db->where('u.jabatan',$jab);
		$this->db->where('mpm.id_periode_maintenance',$main);
		return $this->db->get()->result();
	}


	function hitung($tgl){
		$th=substr($tgl,0,4);
		$bl=substr($tgl,5,6);
		$hr=substr($tgl,8,9);
		$total = $th*360+$bl*30+$hr;
		return $total;
	}

}
