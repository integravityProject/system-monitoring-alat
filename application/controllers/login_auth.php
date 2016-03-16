<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class login_auth extends CI_Controller {

	public $title = "";

	function __construct() {
		parent::__construct();  
		$this->load->model('m_login'); 
		$this->load->model('mmaster'); 
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index() {
		if ($this->session->userdata('login_sess') != "") {
			redirect(site_url('dashboard'), 'refresh');
		}

		$q = $this->m_login->cekDataLogin($this->input->post('username'), $this->input->post('password'));
		if ($q) {

			$dataIns['ROLE']     = $this->input->post('session_data');
			$dataIns['LOG_TIME'] = date('Y-m-d H:i:s');

			$this->m_login->toUpdateUser($this->input->post('username'), $dataIns);
			foreach ($q as $dataUser) {
				$data_session = array(
					'id'       => $dataUser->id,
					'id_user'  => $dataUser->id_user,
					'role'     => $dataUser->role,
					'username' => $dataUser->username,
					'password' => $dataUser->password,
					'ip'       => $dataUser->ip,
					'browser'  => $dataUser->browser,
					'last_login'=> $dataUser->log_time
				);				
				
				$this->session->set_userdata('session', $data_session);
				$this->mmaster->setHistory(4,'User Login');
				redirect(site_url('dashboard'));
			}
		} else {
			$this->session->set_flashdata('gagal', 'Username/password Salah!');
			$data = array(
					'title'			=> 'Kesalahan Login | ERP Mebel ',
					'eror'			=> '   
						<div class="padding" align="center">
                        <div class="notify alert">  
                            <span class="notify-text">Username dan password tidak valid !!</span>
                        </div>
                    </div>
					',
				);

			$this->load->view('login/index',$data); 
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}

}
