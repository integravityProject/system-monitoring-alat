<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengecekan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		 date_default_timezone_set("Asia/Jakarta");
		if ($this->session->userdata('session') == "") {
			$this->session->set_flashdata('fail', 'Anda Harus Login Dulu!');
			redirect(base_url('login'));
		} else {
			 $this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('master');
			$this->load->model('mmaster');
			$this->load->model('mpengecekan');

		} 
	}

	public function index() {
		$data = array(
			'title' 		    => 'Pengecekan Alat',
			'datapengecekan'	=> $this->mmaster->getDataCustom('user'),
			'getTahun'	 		=> $this->mpengecekan->getTahun(),
			'dataUser' 			=> 	$this->mpengecekan->dataUser(),
			'getAlat'	 		=> $this->mpengecekan->dataAlat(),
			'bulanKe'			=> date('m'),
			'tahunKe'			=> date('Y'),
			'no' 				=>1,
			'user'	 			=> $this->master->getCurrentUser()
			);      
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/pengecekan/view_pengecekan');
		$this->load->view('foot');


	}
	public function harian($thn,$bln,$alat,$id_user)
	{
		$data = array(
			'no' 			=> 0,
			'title'    		=> 	'Pengecekan Alat',
			'datapengecekan'=> 	$this->mmaster->getDataCustom('user'),	 
			'getTahun'	 	=> 	$this->mpengecekan->getTahun(),
			'datad' 		=> 	$this->mpengecekan->getKegiatan(1),
			'id_petugas'	=>	$id_user,
			'dataUser'	 	=> 	$this->mpengecekan->dataUser(),
			'getAlat' 		=> 	$this->mpengecekan->dataAlat(),
			'bulanKe' 		=> 	$bln,
			'id_alat'		=> 	$alat,
			'tahunKe' 		=> 	$thn,
			'no' 			=>	1,
			'user' 			=> 	$this->master->getCurrentUser()
			);

		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/pengecekan/pengecekan_harian');
		$this->load->view('foot');
		$this->load->view('cek-js');
	}
	
	public function mingguan($thn,$bln,$alat,$id_user)
	{
		$data = array(
			'no' => 0,
			'title'    		=> 	'Pengecekan Alat',
			'datapengecekan'=> 	$this->mmaster->getDataCustom('user'),	 
			'getTahun'		=> $this->mpengecekan->getTahun(),
			'dataMingguan' 	=> 	$this->mpengecekan->getKegiatan(2),
			'dataUser' 		=> 	$this->mpengecekan->dataUser(),
			'getAlat'	 	=> $this->mpengecekan->dataAlat(),
			'id_petugas'	=>	$id_user,
			'bulanKe' 		=> 	$bln,
			'id_alat'		=> 	$alat,
			'tahunKe' 		=> 	$thn,
			'no' 			=>	1,
			'user' 			=> 	$this->master->getCurrentUser()
			);

		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/pengecekan/pengecekan_mingguan');
		$this->load->view('foot');
		$this->load->view('cek-js');
	}
	
	public function bulanan($tahunKe,$alat,$id_user)
	{
		
			$data = array(
			'no' => 0,
			'title'    		=> 	'Pengecekan Alat',
			'getTahun'	 	=> $this->mpengecekan->getTahun(),
			'datapengecekan'=> 	$this->mmaster->getDataCustom('user'),	 
			'getAlat'	 	=> $this->mpengecekan->dataAlat(),
			'id_petugas'	=>	$id_user,
			'datad' 		=> 	$this->mpengecekan->getKegiatan(3),
			'dataUser' 		=> 	$this->mpengecekan->dataUser(),
			'tahunKe' 		=> 	$tahunKe,
			'id_alat'		=> 	$alat,
			'no' 			=>	1,
			'user' 			=> 	$this->master->getCurrentUser()
			);

		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/pengecekan/pengecekan_bulanan');
		$this->load->view('foot');
		$this->load->view('cek-js');
	}
	public function triwulan($tahunKe,$alat,$id_user)
	{
		
		$data = array(
			'no' 			=> 0,
			'title'     	=> 'Pengecekan Alat',
			'datapengecekan'=> $this->mmaster->getDataCustom('user'),	 
			'getTahun'	 	=> $this->mpengecekan->getTahun(),
			'getAlat'	 	=> $this->mpengecekan->dataAlat(),
			'id_petugas'	=>	$id_user,
			'dataUser' 		=> 	$this->mpengecekan->dataUser(),
			'datad' 		=> $this->mpengecekan->getKegiatan(4),
			'id_alat'		=> 	$alat,
			'mingguKe' 		=>$this->mpengecekan->getMingguKe(date('d')),
			'tahunKe' 		=> 	$tahunKe,
			'no' 			=>1,
			'user' 			=> $this->master->getCurrentUser()
			);

		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/pengecekan/pengecekan_triwulan');
		$this->load->view('foot');
		$this->load->view('cek-js');
	}
	public function semester($tahunKe,$alat,$id_user)
	{
		
		$data = array(
			'no'			=> 0,
			'title'     	=> 'Pengecekan Alat',
			'datapengecekan'=> $this->mmaster->getDataCustom('user'),
			'getAlat'	 	=> $this->mpengecekan->dataAlat(),
			'dataUser' 		=> 	$this->mpengecekan->dataUser(),
			'getTahun'	 	=> $this->mpengecekan->getTahun(),	 
			'id_petugas'	=>	$id_user,
			'datad' 		=> $this->mpengecekan->getKegiatan(5),
			'id_alat'		=> 	$alat,
			'mingguKe' 		=>$this->mpengecekan->getMingguKe(date('d')),
			'tahunKe' 		=> 	$tahunKe,
			'no' 			=>1,
			'user' 			=> $this->master->getCurrentUser()
			);

		// print_r($this->mpengecekan->cekMingguSekarang(2,$id_kegiatan,$this->mpengecekan->getMingguKe(date('d'))));
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/pengecekan/pengecekan_semester');
		$this->load->view('foot');
		$this->load->view('cek-js');
	}
	

	public function insertmingguan($id_kegiatan,$id_user,$mingguke,$tahunKe,$bulanKe,$alat,$id_petugas)
	{
		
		if($mingguke==1){
			$tg=1;
		}else if($mingguke==2){
			$tg=9;
		}else if($mingguke==3){
			$tg=17;
		}else{
			$tg=25;
		}
		$tanggal=$tahunKe."-".$bulanKe."-".$tg;
		$data = array(
			'verifikator'        	=> $id_user,
			'id_periode_maintenance'=> 2,
			'id_alat'				=> $alat,
			'id_petugas'			=> $id_petugas,
			'id_kegiatan'			=> $id_kegiatan,
			'status_verifikasi'		=> 2,
			'tgl_verifikasi'		=> $tahunKe."-".$bulanKe."-".$tg,
			'created_at'			=> date('Y-m-d H:i:s')  
			);
		$cek = array(
			'verifikator'        	=> $id_user,
			'status_verifikasi'		=> 2,
			'tgl_verifikasi'		=> $tanggal,
			'updated_at'			=> date('Y-m-d H:i:s') 
			);
		if($this->mpengecekan->cekAdaMinggu($id_kegiatan,$tahunKe."-".$bulanKe."-".$tg,$alat,$id_petugas)==1){
			$dataawal=json_encode($this->mpengecekan->getData($id_kegiatan,$tanggal,$id_petugas));
			$dataakhir=json_encode($cek);
			$this->mpengecekan->update($cek,$id_kegiatan,$tahunKe."-".$bulanKe."-".$tg,$alat,$id_petugas);
			$this->mmaster->setHistory(2,"Update Pengecekan Mingguan , ".$dataawal." => ".$dataakhir."");
			
		}else{
			$dataakhir=json_encode($data);
			$this->mpengecekan->insert($data);
			$this->mmaster->setHistory(1,"Insert Pengecekan Mingguan , ".$dataakhir."");
				
		}
		
		
		redirect("pengecekan/mingguan/".$tahunKe."/".$bulanKe."/".$alat."/".$id_petugas."");
		
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	public function changemingguan($id_kegiatan,$tgl,$tahunKe,$bulanKe,$alat,$id_petugas)
	{
		$tanggal=$tahunKe."-".$bulanKe."-".$tgl;
		$data = array(
			'verifikator'        	=> $id_user,
			'tgl_verifikasi'		=> $tanggal,
			'status_verifikasi'		=> 1,
			'updated_at'			=> date('Y-m-d H:i:s') 
			);
		$dataawal=json_encode($this->mpengecekan->getData($id_kegiatan,$tanggal,$alat,$id_petugas));
		$dataakhir=json_encode($data);
		$this->mpengecekan->update($data,$id_kegiatan,$tanggal,$alat,$id_petugas);
		$this->mmaster->setHistory(2,"Update Pengecekan Mingguan , ".$dataawal." => ".$dataakhir."");
		
		
		redirect("pengecekan/mingguan/".$tahunKe."/".$bulanKe."/".$alat."/".$id_user."");
		
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}


	//CRUD bulanan triwulan semester
	public function insertdata($id_kegiatan,$id_user,$tahunKe,$bulanKe,$status,$alat,$id_petugas)
	{
		$tanggal=$tahunKe."-".$bulanKe."-1";
		$data = array(
			'verifikator'        	=> $id_user,
			'id_periode_maintenance'=> 3,
			'id_kegiatan'			=> $id_kegiatan,
			'id_alat'				=> $alat,
			'status_verifikasi'		=> 2,
			'id_petugas'			=> $id_petugas,
			'tgl_verifikasi'		=> $tanggal,
			'created_at'			=> date('Y-m-d H:i:s')  
			);
		$cek = array(
			'verifikator'        	=> $id_user,
			'status_verifikasi'		=> 2,
			'tgl_verifikasi'		=> $tanggal,
			'updated_at'			=> date('Y-m-d H:i:s') 
			);
		if($status==3){
			$jenis="Bulanan";
			$url="pengecekan/bulanan/".$tahunKe."/".$alat."/".$id_petugas."";	
		}else if($status==4){
			$jenis="Triwulan";
			$url="pengecekan/triwulan/".$tahunKe."/".$alat."/".$id_petugas."";	
		}else if($status==5){
			$jenis="Semseter";
			$url="pengecekan/semester/".$tahunKe."/".$alat."/".$id_petugas."";	
		}

		if($this->mpengecekan->cekAdaBulan($id_kegiatan,$tahunKe."-".$bulanKe."-1",$alat,$id_petugas)==1){
			$dataawal=json_encode($this->mpengecekan->getData($id_kegiatan,$tanggal,$alat,$id_petugas));						// log history
			$dataakhir=json_encode($cek);
			$this->mpengecekan->update($cek,$id_kegiatan,$tanggal,$alat,$id_petugas);
			$this->mmaster->setHistory(2,"Update Pengecekan ".$jenis.", ".$dataawal." => ".$dataakhir."");
			
		}else{
			$dataakhir=json_encode($data);
			$this->mpengecekan->insert($data);	
			$this->mmaster->setHistory(1,"Insert Pengecekan ".$jenis.", ".$dataakhir."");
			
		}
		redirect($url);
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	public function changedata($id_kegiatan,$tahunKe,$bulanKe,$status,$alat,$id_petugas)
	{
		$tanggal=$tahunKe."-".$bulanKe."-1";
		$data = array(
			'verifikator'        	=> $id_user,
			'tgl_verifikasi'		=> $tanggal,
			'status_verifikasi'		=> 1
			);
		if($status==3){
			$jenis="Bulanan";
			$url="pengecekan/bulanan/".$tahunKe."/".$alat."/".$id_petugas."";	
		}else if($status==4){
			$jenis="Triwulan";
			$url="pengecekan/triwulan/".$tahunKe."/".$alat."/".$id_petugas."";	
		}else if($status==5){
			$jenis="Semseter";
			$url="pengecekan/semester/".$tahunKe."/".$alat."/".$id_petugas."";	
		}
		$dataawal=json_encode($this->mpengecekan->getData($id_kegiatan,$tanggal,$alat,$id_petugas));						// log history
		$dataakhir=json_encode($data);
		$this->mpengecekan->update($data,$id_kegiatan,$tanggal,$alat,$id_petugas);
		$this->mmaster->setHistory(2,"Update Pengecekan ".$jenis.", ".$dataawal." => ".$dataakhir."");
		
			redirect($url);
		
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	//CRUD harian
	public function insertdatahari($id_kegiatan,$id_user,$tahunKe,$bulanKe,$tgl,$alat,$id_petugas)
	{
		$tanggal=$tahunKe."-".$bulanKe."-".$tgl;
		$data = array(
			'verifikator'        	=> $id_user,
			'id_alat'				=> $alat,
			'id_periode_maintenance'=> 1,
			'id_petugas'			=> $id_petugas,
			'id_kegiatan'			=> $id_kegiatan,
			'status_verifikasi'		=> 2,
			'tgl_verifikasi'		=> $tanggal,
			'created_at'			=> date('Y-m-d H:i:s')  
			);
		$cek = array(
			'verifikator'        	=> $id_user,
			'status_verifikasi'		=> 2,
			'tgl_verifikasi'		=> $tanggal
			);
		if($this->mpengecekan->cekAdaBulan($id_kegiatan,$tahunKe."-".$bulanKe."-1",$alat,$id_petugas)==1){
			$dataawal=json_encode($this->mpengecekan->getData($id_kegiatan,$tanggal,$alat,$id_petugas));						// log history
			$dataakhir=json_encode($cek);
			$this->mpengecekan->update($cek,$id_kegiatan,$tanggal,$alat,$id_petugas);
			$this->mmaster->setHistory(2,"Update Pengecekan Harian, ".$dataawal." => ".$dataakhir."");
			
		}else{
			$dataakhir=json_encode($data);
			$this->mpengecekan->insert($data);	
			$this->mmaster->setHistory(1,"Insert Pengecekan Harian, ".$dataakhir."");
			
		}
		redirect("pengecekan/harian/".$tahunKe."/".$bulanKe."/".$alat."/".$id_petugas."");	
		$respon = ['msg' => 'Data berhasil diverifikasi.'];
		echo json_encode($respon);
	}
	public function changedatahari($id_kegiatan,$tahunKe,$bulanKe,$tgl,$alat,$id_petugas)
	{
		$tanggal=$tahunKe."-".$bulanKe."-".$tgl;
		$data = array(
			'verifikator'        	=> $id_user,
			'tgl_verifikasi'		=> $tanggal,
			'status_verifikasi'		=> 1
			);
		$dataawal=json_encode($this->mpengecekan->getData($id_kegiatan,$tanggal,$alat,$id_petugas));						// log history
		$dataakhir=json_encode($data);
		$this->mpengecekan->update($data,$id_kegiatan,$tanggal,$alat,$id_petugas);
		$this->mmaster->setHistory(2,"Update Pengecekan , ".$dataawal." => ".$dataakhir."");
		redirect("pengecekan/harian/".$tahunKe."/".$bulanKe."/".$alat."/".$id_petugas."");	
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}



}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */