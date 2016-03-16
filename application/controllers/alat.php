<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat extends CI_Controller {

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
			$this->load->model('malat');

		} 
	}

	public function index() {
		$data = array(
			'title'     	=> 'Master Alat',
			'dataUser'  	=> $this->mmaster->getDataCustom('user'),	 
			'no' 			=> 	1,
			'viewAlat'	 	=> $this->malat->dataAlat(),
			'user' 			=> $this->master->getCurrentUser()

			);
		$data['user']  	= $this->master->getCurrentUser();	      
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/alat/alat_view', $data);
		$this->load->view('foot');

	}
	public function updatealat()
	{
		$id=$this->input->post('id_alatlama');
		$data = array(
			'id_alat'       => $this->input->post('id_alat'),
			'nama_alat'		=> $this->input->post('nama_alat'),
			'lokasi'		=> $this->input->post('keterangan')
			);
		$dataawal=json_encode($this->malat->getAlat($id));
		$dataakhir=json_encode($data);
		$this->malat->update($data, $id);
		$this->mmaster->setHistory(2,"Update Master Alat , ".$dataawal." => ".$dataakhir."");
		redirect('alat');
		$respon = ['msg' => 'Data UserBerhasil Diupdate.'];
		echo json_encode($respon);
	}


	
	public function changealat($id = null)
	{
		$data['data'] =$this->malat->getAlat($id);	
		$this->load->view('master/alat/alat_change',$data);
	}
		

	public function insertalat()
	{
		$data = array(
			'id_alat'       => $this->input->post('id_alat'),
			'nama_alat'		=> $this->input->post('nama_alat'),
			'lokasi'		=> $this->input->post('keterangan'),
			'created_at'    => date('Y-m-d H:i:s') 
			);
		
		$dataakhir=json_encode($data);
		$this->malat->insert($data);
		$this->mmaster->setHistory(1,"Insert Master alat, ".$dataakhir."");
		

		redirect('alat');
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	public function hapusData($id = null)
	{
		$dataawal=json_encode($this->malat->getAlat($id));
		$this->mmaster->setHistory(3,"Delete Master alat , ".$dataawal."");
		$this->malat->delete($id);

		$respon = ['msg' => 'Data supplier Berhasil Dihapus.'];
		//redirect('penalatan');
		echo json_encode($respon);
	}

 	public function checkData() {
		$data_arr = array();
		$q        = $this->malat->check($this->input->post('id_alat'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		echo json_encode($data_arr, JSON_PRETTY_PRINT);
	}
	public function checkDataEdit() {
		$data_arr = array();
		$q        = $this->malat->check($this->input->post('id_alat'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		$kirim=$data_arr[0]->id_alat;
		echo json_encode($kirim, JSON_PRETTY_PRINT);
	}
	
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */