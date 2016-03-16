<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
			$this->load->model('mjadwal');
			//$this->load->model('mabsensi');
			$this->load->model('mjadwal');
			$this->load->model('muser');
			$this->load->model('mabsensi');

		} 
	}

	public function index() {
		$data = array(
			'title'     	=> 'Laporan',
			
			'dataUser'  	=> $this->mmaster->getDataCustom('user'),	 
			'no' 			=>1,
			'user' 			=> $this->master->getCurrentUser()

			);      
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/laporan/laporan_view', $data);
		$this->load->view('foot');

	}
	public function updatejadwal($id)
	{
		$data = array(
			'id_periode_maintenance'        => $this->input->post('periode'),
			'kegiatan'           => $this->input->post('keterangan')
			);


		$this->mjadwal->update($data, $id);
		redirect('penjadwalan');
		$respon = ['msg' => 'Data UserBerhasil Diupdate.'];
		echo json_encode($respon);
	}


	
	public function changejadwal($id = null)
	{
		$data['data'] =$this->mjadwal->getJadwalEdit($id);	
		$this->load->view('master/jadwal/jadwal_change',$data);
	}
	public function laporan_pa()
	{
		$data = array(
			'title' =>"Laporan Pengecekan Alat",
			'lokasi'	=>$this->mmaster->getlokasi(),
			'jabatan' 	=> $this->mabsensi->getjabatan(),
			'teknisi'	=>$this->mabsensi->getteknis(),
			'alat' 	=>$this->mmaster->alat(),
			'periode'	=>$this->mmaster->getperiode(),
			'laporan' =>$this->input->post('period'),
			'hari' =>$this->input->post('harian'),
			'tahun' =>$this->input->post('tahunan'),
			'bulan' =>$this->input->post('bulanan'),			
			'tgl1' =>$this->input->post('tgl1'),
			'tgl2' =>$this->input->post('tgl2'),
			'tahun' =>$this->input->post('tahun'),
		);
		$pm=$this->input->post('main');
		$lok=$this->input->post('lok');
		$nama=$this->input->post('nam');
		$jab=$this->input->post('jab');
		$kode=$this->input->post('kode');
		$ver=$this->input->post('verif');

		if($ver==0)
		{
			if($pm==0)
			{
					if($kode==1)
					{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";$jab="";$kode="";$ver="";
								}else {
									$pm="" ;$lok="";$jab="";$kode="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";$kode="";$ver="";
								}
								else { 
									$pm="" ;$lok="";$kode="";$ver="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";$jab="";$kode="";$ver="";
								}else {
									$pm="" ;$jab="";$kode="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";$kode="";$ver="";
								}
								else {
									$pm="" ;$kode="";$ver="";
								}
							}
						
						}
					}else{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";$jab="";$ver="";
								}else {
									$pm="" ;$lok="";$jab="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";$ver="";
								}
								else {
									$pm="" ;$lok="";$ver="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";$jab="";$ver="";
								}else {
									$pm="" ;$jab="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";$ver="";
								}
								else {
									$pm="" ;$ver="";
								}
							}
						}
					}
				}else{
					if($kode==1)
					{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";$jab="";$kode="";$ver="";
								}else {
									$lok="";$jab="";$kode="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";$kode="";$ver="";
								}
								else { 
									$lok="";$kode="";$ver="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$nama="";$jab="";$kode="";$ver="";
								}else {
									$jab="";$kode="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
								$nama="";$kode="";$ver="";
								}
								else {
									$kode="";$ver="";
								}
							}
						
						}
					}else{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";$jab="";$ver="";
								}else {
									$lok="";$jab="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";$ver="";
								}
								else {
									$lok="";$ver="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$nama="";$jab="";$ver="";
								}else {
									$jab="";$ver="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$nama="";$ver="";
								}
								else {
									$ver="";
								}
							}
						}
					}
				}
			}else{

				if($pm==0)
			{
					if($kode==1)
					{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";$jab="";$kode="";
								}else {
									$pm="" ;$lok="";$jab="";$kode="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";$kode="";
								}
								else { 
									$pm="" ;$lok="";$kode="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";$jab="";$kode="";
								}else {
									$pm="" ;$jab="";$kode="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";$kode="";
								}
								else {
									$pm="" ;$kode="";
								}
							}
						
						}
					}else{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";$jab="";
								}else {
									$pm="" ;$lok="";$jab="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$lok="";$nama="";
								}
								else {
									$pm="" ;$lok="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";$jab="";
								}else {
									$pm="" ;$jab="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$pm="" ;$nama="";
								}
								else {
									$pm="" ;
								}
							}
						}
					}
				}else{
					if($kode==1)
					{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";$jab="";$kode="";
								}else {
									$lok="";$jab="";$kode="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";$kode="";
								}
								else { 
									$lok="";$kode="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$nama="";$jab="";$kode="";
								}else {
									$jab="";$kode="";
								}
							}else{
								if ($this->input->post('nam')==1) {
								$nama="";$kode="";
								}
								else {
									$kode="";
								}
							}
						
						}
					}else{
						if($this->input->post('lok')==1)
						{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";$jab="";
								}else {
									$lok="";$jab="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$lok="";$nama="";
								}
								else {
									$lok="";
								}
							}
						}else{
							if($this->input->post('jab')==0)
							{
								if ($this->input->post('nam')==1) {
									$nama="";$jab="";
								}else {
									$jab="";
								}
							}else{
								if ($this->input->post('nam')==1) {
									$nama="";
								}
								else {
									
								}
							}
						}
					}
				}

			}

			$data['filter'] = $this->mmaster->getpengecekan_alat($pm,$lok,$jab,$nama,$kode,$ver);
		

		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/laporan/laporan_pengecekan_alat',$data);
		$this->load->view('foot');
	}
	public function laporan_ka()
	{	$data = array(
		'title' =>"Laporan Kondisi Alat",
		'lokasi'	=>$this->mmaster->getlokasi(),
		'pengaduan'	=>$this->mmaster->getpengaduan(),
		'alat' 	=>$this->mmaster->alat(),
		'laporan' =>$this->input->post('period'),
			'hari' =>$this->input->post('harian'),
			'tahun' =>$this->input->post('tahunan'),
			'bulan' =>$this->input->post('bulanan'),			
			'tgl1' =>$this->input->post('tgl1'),
			'tgl2' =>$this->input->post('tgl2'),
		);

	$lokasi=$this->input->post('lokasi');
	$kode=$this->input->post('kode');
	$kon=$this->input->post('kon');
	if($kon==0)
	{
			if($this->input->post('lokasi')==1)
				{
					if($this->input->post('kode')==1)
						{
							$kode="";$lokasi="";$kon="";
						}
					else{
							$lokasi="";$kon="";		
						}
				}
			else{
				if($this->input->post('kode')==1)
						{
							$kode="";$kon="";		
						}
					else{
								$kon="";
						}
			}
		}
		else{
			if($this->input->post('lokasi')==1)
				{
					if($this->input->post('kode')==1)
						{
							$kode="";$lokasi="";
						}
					else{
							$lokasi="";		
						}
				}
			else{
				if($this->input->post('kode')==1)
						{
							$kode="";		
						}
					else{
								
						}
			}
		}

		$data['filter'] = $this->mmaster->getkondisi($lokasi,$kode,$kon) ;
		

		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/laporan/laporan_kondisi_alat',$data);
		$this->load->view('foot');
	}
	public function laporan_p()
	{
		$data = array(
			'title' =>"Laporan  Pengaduan",
			'lokasi'	=>$this->mmaster->getlokasi(),
			'pengaduan'	=>$this->mmaster->getpengaduan(),
			'user' =>$this->mmaster->getuser(),
			'alat' 	=>$this->mmaster->alat(),
			'laporan' =>$this->input->post('period'),
			'hari' =>$this->input->post('harian'),
			'tahun' =>$this->input->post('tahunan'),
			'bulan' =>$this->input->post('bulanan'),			
			'tgl1' =>$this->input->post('tgl1'),
			'tgl2' =>$this->input->post('tgl2'),
		);

		if($this->input->post('jenis')==1){

			
			if($this->input->post('lokasi')==1)
			{
				if($this->input->post('kode')==1)
					{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("","","","");	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),"","","");
							}
					}else{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("",$this->input->post('kode'),"","");	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),$this->input->post('kode'),"","");
							}
						}

			}else{
						if($this->input->post('kode')==1)
					{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("","",$this->input->post('lokasi'),"");	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),"",$this->input->post('lokasi'),"");
							}
					}else{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("",$this->input->post('kode'),$this->input->post('lokasi'),"");	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),$this->input->post('kode'),$this->input->post('lokasi'),"");
							}
						}
			}


		}else{
			if($this->input->post('lokasi')==1)
			{
				if($this->input->post('kode')==1)
					{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("","","",$this->input->post('jenis'));	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),"","",$this->input->post('jenis'));
							}
					}else{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("",$this->input->post('kode'),"",$this->input->post('jenis'));	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),$this->input->post('kode'),"",$this->input->post('jenis'));
							}
						}

			}else{
						if($this->input->post('kode')==1)
					{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("","",$this->input->post('lokasi'),$this->input->post('jenis'));	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),"",$this->input->post('lokasi'),$this->input->post('jenis'));
							}
					}else{
							if ($this->input->post('nam')==1) {
								$data['filter'] = $this->mmaster->getpengaduanmain("",$this->input->post('kode'),$this->input->post('lokasi'),$this->input->post('jenis'));	
								}
							else {
								$data['filter'] = $this->mmaster->getpengaduanmain($this->input->post('nam'),$this->input->post('kode'),$this->input->post('lokasi'),$this->input->post('jenis'));
							}
						}
			}
		}

		
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/laporan/pengaduan',$data);
		$this->load->view('foot');
	}
	public function laporan_m()
	{
		$data = array(
			'title' =>"Laporan Maintenance",
			'lokasi'	=>$this->mmaster->getlokasi(),
			'jabatan' 	=> $this->mmaster->getjabpengaduan(),
			'absensi' 	=> $this->mabsensi->getjabat(),
			'teknisi'	=>$this->mabsensi->getteknis(),
			'pengaduan'	=>$this->mmaster->getpengaduan(),
			'periode'	=>$this->mmaster->getperiode(),
			'alat' 	=>$this->mmaster->alat(),
			'laporan' =>$this->input->post('period'),
			'hari' =>$this->input->post('harian'),
			'tahun' =>$this->input->post('tahunan'),
			'bulan' =>$this->input->post('bulanan'),			
			'tgl1' =>$this->input->post('tgl1'),
			'tgl2' =>$this->input->post('tgl2'),

		);

		$lok=$this->input->post('lokasi');
		$kode=$this->input->post('kode');
		$nam=$this->input->post('nam');
		$jab=$this->input->post('jab');
		

		if($this->input->post('lokasi')==1)
			{
			if($this->input->post('kode')==1)
			{
				if($this->input->post('jab')==0)
				{
					if ($this->input->post('nam')==1) {
						$nam="";$kode="";$lok="";$jab="";
						}
					else {	
						$kode="";$lok="";$jab="";
					}
				}
				else{
					if ($this->input->post('nam')==1) {
						$nam="";$kode="";$lok="";
						
						}
					else {
						$kode="";$lok="";
						
					}	
				}
			}else{
					if($this->input->post('jab')==0)
				{
					if ($this->input->post('nam')==1) {
						$nam="";$lok="";$jab="";
						}
					else {
						$lok="";$jab="";
					}
				}
				else{
					if ($this->input->post('nam')==1) {
						$nam="";$lok="";
						}
					else {
						$lok="";
					}	
				}
				}
			}else{
				if($this->input->post('kode')==1)
			{
				if($this->input->post('jab')==0)
				{
					if ($this->input->post('nam')==1) {
						$nam="";$kode="";$jab="";
						
						}
					else {
					$kode="";$jab="";	
					}
				}
				else{
					if ($this->input->post('nam')==1) {
						$nam="";$kode="";
						}
					else {
						$kode="";
						
					}	
				}
			}else{
					if($this->input->post('jab')==0)
				{
					if ($this->input->post('nam')==1) {
						$nam="";$lok="";$jab="";
						}
					else {$jab="";
						
					}
				}
				else{
					if ($this->input->post('nam')==1) {
						$nam="";
						}
					else {
					}	
				}
				}
			}		
						
			$data['filter'] = $this->mmaster->getpengaduanmain1($nam,$kode,$lok,$jab);

		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/laporan/laporan_maintenance');
		$this->load->view('foot');
	}

	public function getnama() {
		 
			$this->db->select('*');
			$this->db->from('user');
			foreach ($this->db->get()->result() as $x) {
				if($x->jabatan==3||$x->jabatan==4){
				$data[] = [
				'id_user' 	=> $x->id_user,
				'nama_lengkap' 	=> $x->nama_lengkap,
				];
				}
			} 

		echo json_encode($data, JSON_PRETTY_PRINT);
	}

	public function laporan_kp()
	{
		$jab=$this->input->post('jab');
		$nam=$this->input->post('nam');
		$data = array(
			'title' =>"Laporan  Kehadiran Petugas",
			'lokasi'	=>$this->mmaster->getlokasi(),
			'jabatan' 	=> $this->mabsensi->getjabatan(),
			'absensi' 	=> $this->mabsensi->getjabat(),
			'teknisi'	=>$this->mabsensi->getteknis(),
			'pengaduan'	=>$this->mmaster->getpengaduan(),
			'periode'	=>$this->mmaster->getperiode(),
			'absen'	=>$this->mmaster->absen(),
			'laporan' =>$this->input->post('period'),
			'hari' =>$this->input->post('harian'),
			'tahun' =>$this->input->post('tahunan'),
			'bulan' =>$this->input->post('bulanan'),			
			'tgl1' =>$this->input->post('tgl1'),
			'tgl2' =>$this->input->post('tgl2'),
		);
		if($this->input->post('jab')==0)
		{
			if ($this->input->post('nam')==1) {
				$data['filter'] = $this->mmaster->absen();
				}
			else {
				$data['filter'] = $this->mmaster->filterabsen($nam);
			}
		}else{
			if ($this->input->post('nam')==1) {
				$data['filter'] = $this->mmaster->filterjab($this->input->post('jab'));
			}
			else {
				$data['filter'] = $this->mmaster->filterabsen($nam);
			}
		}
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/laporan/laporan_kehadiran_petugas',$data);
		$this->load->view('foot'); 
	}



		

	public function insertjadwal()
	{
		$data = array(
			'id_periode_maintenance'        => $this->input->post('periode'),
			'kegiatan'        => $this->input->post('keterangan'),
			'created_by'        => "ipung",
			'created_at'		=> date('Y-m-d H:i:s')  
			);

		$this->mjadwal->insert($data);		
		redirect('penjadwalan');
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	public function hapusData($id = null)
	{
		$this->mjadwal->delete($id);

				$respon = ['msg' => 'Data supplier Berhasil Dihapus.'];
		//redirect('penjadwalan');
		echo json_encode($respon);
	}
	function remove_checked()  
{  
       $checked = $this->input->post('msg');
    foreach($checked as $val){
        $this->mjadwal->delete($val);
    }
    redirect('user');
}  
 
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */