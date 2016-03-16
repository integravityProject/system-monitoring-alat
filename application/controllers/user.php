<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
			$this->load->model('muser');

		} 
	}

	public function index() {
		$data = array(
			'title'     => 'Manajemen User',
			'dataUser'  => $this->mmaster->getDataCustom('user'),	 
			'viewUser'  => $this->muser->dataUser(),
			'jabat'  => $this->muser->getJabatan(),
			'no' =>1,
			'user' 			=> $this->master->getCurrentUser()
			);      

		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('master/user/user_view', $data);
		$this->load->view('foot');

	}
	public function updateuseradmin($id_user)
	{
		$data = array(
			'id_user'        => strtoupper($this->input->post('id_user2')),
			'nama_lengkap'        => $this->input->post('nama'),
			'jabatan'           => $this->input->post('jabatan'),
			'tmpt_lahir'          => strtoupper($this->input->post('tempat')),
			'tgl_lahir'          => $this->input->post('tanggal'),
			'nip'        => $this->input->post('nip'),
			'nik'        => $this->input->post('nik'),
			'telp'      	=> $this->input->post('telp') 
			);

		if($this->input->post('password')==""){
			$admin=array(
			'id_user'       => strtoupper($this->input->post('id_user2')),
			'username' 		=> $this->input->post('username')
			);
		}else{
			$admin=array(
			'id_user'        => strtoupper($this->input->post('id_user2')),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
			);
		}

		$data1=json_encode($this->muser->getUser($id_user));
		$data2=json_encode($data);
		if($this->input->post('jabatan')==1){
			$this->muser->update($data, $id_user);
			$this->muser->updateadmin($admin,$id_user);	
			$dataawal=$data1." + update admin +".json_encode($admin);
			if($this->muser->checkadmin($id_user)!=""){
				$useradmin =array(
					'id_user' => $this->input->post('id_user2'),
					'role' => 0,
					'username'         => $this->input->post('username'),
					'password'           => md5($this->input->post('password')),
					'created_at'		=> date('Y-m-d H:i:s')
				);
				$this->muser->insertadmin($useradmin);
				$dataawal=$data1." + insert admin +".json_encode($useradmin);
			}
		}else{
			$dataawal=$data1." + delete admin +".$id_user;
			$this->muser->update($data, $id_user);
			$this->muser->deleteadmin($id_user);
		}
		$this->mmaster->setHistory(2,"Update User Admin , ".$dataawal." => ".$dataakhir."");
		redirect('user');
		$respon = ['msg' => 'Data UserBerhasil Diupdate.'];
		echo json_encode($respon);
	}


	
	public function changeuser($id = null)
	{
		$data = array(
			'title'     => 'Manajemen User',
			'dataUser'  => $this->mmaster->getDataCustom('user'),	 
			'viewUser'  => $this->muser->dataUser(),
			'jabat'  => $this->muser->getJabatan(),
			'jabat2'  => $this->muser->getJabatanExAdmin($id),
			'no' =>1,
			'user' 			=> $this->master->getCurrentUser()
			);      
			$data['data'] =$this->muser->getUser($id);	
		$this->load->view('master/user/user_change', $data);
	}
	public function changeuserAdmin($id = null)
	{
		$data = array(
			'title'     => 'Manajemen User',
			'dataUser'  => $this->mmaster->getDataCustom('user'),	 
			'viewUser'  => $this->muser->dataUser(),
			'jabat'  => $this->muser->getJabatan(),
			'jabat2'  => $this->muser->getJabatanExAdmin($id),
			'no' =>1,
			'user' 			=> $this->master->getCurrentUser()
			);      
		
			$data['data']=$this->muser->getUP($id);	
			$data['data2']=$this->muser->getAdmin($id);	
		$this->load->view('master/user/user_change', $data);
	}
	
	public function checkData() {
		$data_arr = array();
		$q        = $this->muser->check($this->input->post('id_user'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		echo json_encode($data_arr, JSON_PRETTY_PRINT);
	}
	public function checkDataEdit() {
		$data_arr = array();
		$q        = $this->muser->check($this->input->post('id_user'));
		foreach ($q as $data) {
			$data_arr[] = $data;
		}
		echo json_encode($data_arr, JSON_PRETTY_PRINT);
	}
	
	public function insertuser()
	{
		$data = array(
			'id_user' 			=> strtoupper($this->input->post('id_user')),
			'nama_lengkap'      => $this->input->post('nama'),
			'nip'		        => $this->input->post('nip'),
			'nik'        		=> $this->input->post('nik'),
			'tmpt_lahir'        => strtoupper($this->input->post('tempat')),
			'tgl_lahir'         => $this->input->post('tanggal'),
			'jabatan'           => $this->input->post('jabatan'),
			'telp'      		=> $this->input->post('telp')  ,       
			'created_at'		=> date('Y-m-d H:i:s')  
			);

		$admin =array(
			'id_user' 			=> strtoupper($this->input->post('id_user')),
			'role' 				=> 0,
			'username'         	=> $this->input->post('username'),
			'password'          => md5($this->input->post('password')),
			'created_at'		=> date('Y-m-d H:i:s')
			);
		if($this->input->post('jabatan')!=1){
			$dataakhir=json_encode($data);
			$this->mmaster->setHistory(1,"insert Master User, ".$dataakhir."");
			$this->muser->insert($data);	
		}else{
			$dataawal=json_encode($data);
			$dataakhir=json_encode($admin);
			$this->mmaster->setHistory(1,"insert Master User,".$dataawal." + admin + ".$dataakhir."");
			$this->muser->insert($data);
			$this->muser->insertadmin($admin);
		}
		
		redirect('user');
		$respon = ['msg' => 'Data User Berhasil Ditambahkan.'];
		echo json_encode($respon);
	}
	public function hapusData($id = null)
	{
		$data=json_encode($this->muser->getUserData($id));
		$this->mmaster->setHistory(3,"Delete User, ".$data."");
		$this->muser->delete($id);
		$respon = ['msg' => 'Data supplier Berhasil Dihapus.'];
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
 
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */