<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class login extends CI_Controller {

	public $title = "";

	function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta"); 
		$this->load->model('master');
		$this->load->model('m_login');
		$this->load->model('login_validation');
	}

	public function index() {
	
	if ($this->session->userdata('session') != "") {
			redirect(site_url('dashboard'), 'refresh');
		} else { 
			$data = array(
					'title'			=> '.:: Login ::. ',
					'eror'			=> '',
				);
			$this->load->view('login/index', $data);
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}

}
