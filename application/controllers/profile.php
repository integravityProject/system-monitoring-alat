<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		 date_default_timezone_set("Asia/Jakarta");
		if ($this->session->userdata('session') == "") {
			$this->session->set_flashdata('fail', 'Anda Harus Login Dulu!');
			redirect(base_url('login'));
		} else {
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('master');
			$this->load->model('mmaster');
			$this->load->model('mprofil');
		} 
	}

	public function index() {	
		$data['title'] = "My Account";
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data);
		$this->load->view('nav');
		$this->load->view('sidebar');
		$this->load->view('profil');
		$this->load->view('foot');

	}

	public function ubah($id=null){
		$lama=$this->input->post('passlama');
		$en=md5($lama);
		$pass=$this->mprofil->getpass($en);
		if($lama!=null){
			if($this->mprofil->getpass($en)==true)
			{
				if($this->input->post('konfirm')!=null)

					$data1= array(
						'nama_lengkap' =>$this->input->post('nama')
					);

					$data = array(
						'username'        => $this->input->post('user'),
						'Password'		=>md5($this->input->post('konfirm'))
					);
					$dataawal=json_encode($this->mprofil->getUser($id));
					$dataakhir=json_encode($data);
					$this->mprofil->update($data,$data1, $id);
					$this->mmaster->setHistory(2,"Update User Profile , ".$dataawal." => ".$dataakhir."");
					

					$this->session->set_flashdata('msg','data berhasil diubah');
					redirect('profile',$en);
			}
			else{
				$this->session->set_flashdata('eror','Password lama tidak cocok , silahkan masukkan kembali');
				redirect('profile');
			}
		}else{
			$data1= array(
				'nama_lengkap' =>$this->input->post('nama')
			);

			$data = array(
			'username'        => $this->input->post('user'),
			);
			$dataawal=json_encode($this->mprofil->getUser($id));
			$dataakhir=json_encode($data." + ".$data1);
			$this->mprofil->update($data,$data1, $id);
			$this->mmaster->setHistory(2,"Update User Profile , ".$dataawal." => ".$dataakhir."");
			$this->session->set_flashdata('msg','data berhasil diubah');
			redirect('profile');
		}
		
			
		

		
	} 

	public function checkData() {
		$data_arr = array();
		$q        = $this->mprofil->check($this->input->post('passlama'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		echo json_encode($data_arr, JSON_PRETTY_PRINT);
	}
 
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */