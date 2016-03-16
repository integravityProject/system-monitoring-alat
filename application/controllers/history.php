<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

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
			$this->load->model('mhistory');
		} 
	}

	public function index() {
		$data = array(
			'title'     	=> 'History',
			'dataUser'  	=> $this->mmaster->getDataCustom('user'),	 
			'no' 			=> 	1,
			'viewHistory'	 	=> $this->mhistory->dataHistory(),
			'user' 			=> $this->master->getCurrentUser()

			);
		$data['user']  	= $this->master->getCurrentUser();	      
		$this->load->view('head',$data); 
		$this->load->view('nav');	
		$this->load->view('sidebar'); 
		$this->load->view('history_view', $data);
		$this->load->view('foot');

	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */