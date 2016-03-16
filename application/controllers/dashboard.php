<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		 date_default_timezone_set("Asia/Jakarta");
		if ($this->session->userdata('session') == "") {
			$this->session->set_flashdata('fail', 'Anda Harus Login Dulu!');
			redirect(base_url('login'));
		} else {
			$this->load->helper('url');
			$this->load->model('master');
			$this->load->model('mmaster');
		} 
	}

	public function index() {
		$data['title'] = "Sistem Monitoring Alat";
		$data['user']  	= $this->master->getCurrentUser();
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('dashboard/body'); 
		$this->load->view('foot');

	}
 
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */