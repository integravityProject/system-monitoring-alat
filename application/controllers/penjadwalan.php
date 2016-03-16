<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjadwalan extends CI_Controller {

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

		} 
	}

	public function index() {
		$data = array(
			'title'     	=> 'Penjadwalan Maintenance',
			'dataUser'  	=> $this->mmaster->getDataCustom('user'),	 
			'no' 			=>1,
			'viewJadwal' 	=> $this->mjadwal->dataJadwal(),
			'harian'		=> $this->mjadwal->getJadwal(1),
			'mingguan'		=> $this->mjadwal->getJadwal(2),
			'bulanan'		=> $this->mjadwal->getJadwal(3),
			'triwulan'		=> $this->mjadwal->getJadwal(4),
			'semester'		=> $this->mjadwal->getJadwal(5),
			'jum_harian'	=> $this->mjadwal->getJadwalCount(1),
			'jum_mingguan'	=> $this->mjadwal->getJadwalCount(2),
			'jum_bulanan'	=> $this->mjadwal->getJadwalCount(3),
			'jum_triwulan'	=> $this->mjadwal->getJadwalCount(4),
			'jum_semester'	=> $this->mjadwal->getJadwalCount(5),
			'user' 			=> $this->master->getCurrentUser()

			);
		$data['user']  	= $this->master->getCurrentUser();	      
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/jadwal/jadwal_view', $data);
		$this->load->view('foot');

	}
	public function updatejadwal($id)
	{
		$data = array(
			'id_periode_maintenance'        => $this->input->post('periode'),
			'kegiatan'           => $this->input->post('keterangan')
			);
		$dataawal=json_encode($this->mjadwal->getPenjadwalan($id));
		$dataakhir=json_encode($data);
		$this->mjadwal->update($data, $id);
		$this->mmaster->setHistory(2,"Update Jadwal Maintenance , ".$dataawal." => ".$dataakhir."");
		redirect('penjadwalan');
		$respon = ['msg' => 'Data UserBerhasil Diupdate.'];
		echo json_encode($respon);
	}


	
	public function changejadwal($id = null)
	{
		$data['data'] =$this->mjadwal->getJadwalEdit($id);	
		$this->load->view('master/jadwal/jadwal_change',$data);
	}
		

	public function insertjadwal()
	{
		$data = array(
			'id_periode_maintenance'        => $this->input->post('periode'),
			'kegiatan'        => $this->input->post('keterangan'),
			'created_by'        => "ipung",
			'created_at'		=> date('Y-m-d H:i:s')  
			);
		
		$dataakhir=json_encode($data);
		$this->mjadwal->insert($data);
		$this->mmaster->setHistory(1,"Insert Jadwal Maintenance , ".$dataakhir."");
		

		redirect('penjadwalan');
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	public function hapusData($id = null)
	{
		$dataawal=json_encode($this->mjadwal->getPenjadwalan($id));
		$this->mmaster->setHistory(3,"Delete Jadwal Maintenance , ".$dataawal."");
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