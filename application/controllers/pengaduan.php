<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

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
			$this->load->model('mpengaduan');

		} 
	}

	public function index() {
		$data = array(
			'title'     => 'Pengaduan',
			'datapengaduan'  => $this->mmaster->getDataCustom('user'),	 
			'viewpengaduan'  => $this->mpengaduan->datapengaduan(),
			'jabatan' 	=> $this->mpengaduan->getjabat(),
			'jen_peng' 	=> $this->mpengaduan->getjenis(),
			'teknisi'	=>$this->mpengaduan->getteknis(),
			'no' =>1,
			'alat' 	=>$this->mpengaduan->alat(),
			'user' 			=> $this->master->getCurrentUser()
			);      
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/pengaduan/pengaduan_view');
		$this->load->view('foot');

	}

	public function changepengaduan($id = null)
	{
		$data = array(
		'datapengaduan'  => $this->mmaster->getDataCustom('user'),	 
			'view'  => $this->mpengaduan->datapengaduan(),
			'jen_peng'  => $this->mpengaduan->getJenis($id),
			'jabatan' 	=> $this->mpengaduan->getjabat(),
			'teknisi'	=>$this->mpengaduan->getteknis(),
			'datau'	=>$this->mpengaduan->datapengaduanby($id),
			'no' =>1,
			'alat' 	=>$this->mpengaduan->alat(),
			'user' 			=> $this->master->getCurrentUser(),
			'adu' =>$this->input->post('pengadu'),
			);      


		$data['data'] = $this->mpengaduan->getpengaduan($id);

		$this->load->view('master/pengaduan/changepengaduan', $data);
	}
	
	public function checkData() {
		$data_arr = array();
		$q        = $this->muser->check($this->input->post('id_user'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		echo json_encode($data_arr, JSON_PRETTY_PRINT);
	}
	public function insertpengaduan()
	{
		
		
		$id=$this->input->post('id_petugas');
		if($id==null){
			$id="masy";
		}
		$data = array(
			'pengadu' => strtoupper($this->input->post('pengadu')),
			'id_jenis'        => $this->input->post('id_jenis'),
			'id_petugas'        => $id,
			'kode_unit_parkir'        => $this->input->post('kode_unit_parkir'),
			'tgl_aduan'          => $this->input->post('tgl_aduan'),
			'keterangan'          => $this->input->post('keterangan'),
			'created_by'		=> $this->session->userdata('session')['username'],
			'created_at'		=> date('Y-m-d H:i:s')  
			);
			
			$dataakhir=json_encode($data);
			$this->mmaster->setHistory(1,"Insert Master Pengaduan, ".$dataakhir."");
			$this->mpengaduan->insert($data);

		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
		redirect('pengaduan');
	}

	public function updatepengaduan($id)
	{
		if($this->input->post('pengadu')==1){
			$jab=$this->input->post('jab');
			$nam=$this->input->post('id_petugas');
		}else{
			$jab="";
			$nam="masy";
		};
		
		$data = array(
			'pengadu' => strtoupper($this->input->post('pengadu')),
			'id_jenis'        => $this->input->post('id_jenis'),
			'id_petugas'        => $nam,
			'kode_unit_parkir'        => $this->input->post('kode_unit_parkir'),
			'tgl_aduan'          => $this->input->post('tgl_aduan'),
			'keterangan'          => $this->input->post('keterangan'),
			'created_by'		=> $this->session->userdata('session')['username'],
			'created_at'		=> date('Y-m-d H:i:s')  
			);
			
			$dataakhir=json_encode($data);
			$this->mmaster->setHistory(2,"Update Master Pengaduan, ".$dataakhir."");
			$this->mpengaduan->update($data,$id);

		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
		redirect('pengaduan');
	}


	public function updateverifikasi($id = null)
	{
		$data = array(
			'id'				=> $id,
			'status_verifikasi'	=>"2",
			'tgl_verifikasi'           => $this->input->post('tgl_verif'),
			'verifikator'       => $this->input->post('teknisi'),
			'keterangan_verifikator'      	=> $this->input->post('ket-verif')           
			);

		$this->mpengaduan->update($data, $id);
		$dataawal=json_encode($data);
		$this->mmaster->setHistory(2,"Update Master Pengaduan, Verifikasi ".$dataawal."");
		$respon = ['msg' => 'Data supplier Berhasil Diupdate.'];
		echo json_encode($respon);
		redirect("pengaduan");
	}

	public function hapusData($id = null)
	{
		$this->mpengaduan->delete($id);

		//redirect('user');
		echo json_encode($respon);
	}
	function remove_checked()  
{  
       $checked = $this->input->post('msg');
    foreach($checked as $val){
        $this->muser->delete($val);
    }
    redirect('user');
}  

public function getnama() {
		 
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('jabatan', $this->input->post('datanama'));

			foreach ($this->db->get()->result() as $x) {
				$data[] = [
				'id_user' 	=> $x->id_user,
				'nama_lengkap' 	=> $x->nama_lengkap,
				];
			} 

		echo json_encode($data, JSON_PRETTY_PRINT);
	}
 
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */