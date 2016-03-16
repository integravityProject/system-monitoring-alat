<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class absensi extends CI_Controller {

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
			$this->load->model('mabsensi');

		} 
	}

	public function index() {


		$data = array(
			'title'     => 'Absensi Petugas',
			'dataabsensi'  => $this->mmaster->getDataCustom('user'),	 
			'jabatan' 	=> $this->mabsensi->getjabatan(),
			'absensi' 	=> $this->mabsensi->getjabat(),
			'teknisi'	=>$this->mabsensi->getteknis(),
			'no' =>1,
			'user' 			=> $this->master->getCurrentUser()
			);      
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head', $data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/absensi/absensi_view');
		$this->load->view('foot');

	}
	public function updateabsen($id = null)
	{
		$data = array(
			'id_petugas'        => $this->input->post('id_petugas'),
			'absen'        => $this->input->post('absen'),
			'tgl'        => $this->input->post('tgl'),
			'keterangan'          => $this->input->post('keterangan'),
			'created_by'		=> $this->session->userdata('session')['username'],
			'created_at'		=> date('Y-m-d H:i:s')  
			);

		$dataawal=json_encode($this->mabsensi->getAbsensi($id));
		$dataakhir=json_encode($data);
		$this->mmaster->setHistory(2,"Update Master Absensi, ".$dataawal." => ".$dataakhir."");
		$this->mabsensi->update($data, $id);
		$respon = ['msg' => 'Data UserBerhasil Diupdate.'];
		echo json_encode($respon);
	}
	public function changeabsensi($id = null)
	{	

		$data = array(
			'id_petugas'        => $this->input->post('id_petugas'),
			'absen'        => $this->input->post('absen'),
			'tgl'        => $this->input->post('tgl'),
			'keterangan'          => $this->input->post('keterangan'),
			'created_by'		=> $this->session->userdata('session')['username'],
			'created_at'		=> date('Y-m-d H:i:s'),
			'jabatan' 	=> $this->mabsensi->getjabatan(),
			'absensi' 	=> $this->mabsensi->getjabat(),
			'teknisi'	=>$this->mabsensi->getteknis(),
			);
			
		$this->db->where('id', $id);
		$data['data'] = $this->db->get('absensi')->result();

		$this->load->view('master/absensi/absensi_change', $data);
	}
	
	public function checkData() {
		$data_arr = array();
		$q        = $this->muser->check($this->input->post('id_user'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		echo json_encode($data_arr, JSON_PRETTY_PRINT);
	}
	public function insertabsensi()
	{
		$data = array(
			'id_petugas'        => $this->input->post('id_petugas'),
			'absen'       	 	=> $this->input->post('absen'),
			'tgl'        => $this->input->post('tgl'),
			'keterangan'          => $this->input->post('keterangan'),
			'created_by'		=> $this->session->userdata('session')['username'],
			'created_at'		=> date('Y-m-d H:i:s')  
			);
			$id=$this->input->post('id_petugas');
			$this->mmaster->setHistory(1,"Insert Master Absensi, ".$this->mabsensi->getName($id)." (".$this->input->post('tgl')."), absen = ".$this->input->post('absen')." ('".$this->input->post('keterangan')."')");
			$this->mabsensi->insert($data);
		
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}

	public function updateverifikasi($id = null)
	{
		$data = array(
			'status_verifikasi'	=>$this->input->post('status_verifikasi'),
			'tgl_verifikasi'           => $this->input->post('tgl_verifikasi'),
			'verifikator'       => $this->input->post('verifikator'),
			'keterangan_verifikator'      	=> $this->input->post('keterangan_verifikator')           
			);

		$this->mabsensi->update($data, $id);

		$respon = ['msg' => 'Data supplier Berhasil Diupdate.'];
		echo json_encode($respon);
	}

	public function hapusData($id = null)
	{
		$this->mabsensi->delete($id);

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


public function getnama1() {
		 
			$this->db->select('*');
			$this->db->from('user');
			
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