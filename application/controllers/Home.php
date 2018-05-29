<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Pertamina {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('mjson_location');

	}

	public function index() 
	{

		$this->page_title->push('Home', 'Selamat datang di Sistem Penerimaan Karyawan Baru Pertamina');

		$this->data = array(
			'title' => "Home - Sistem Penerimaan Pegawai", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);

		$this->template->view('Pertamina/v_home', $this->data);
	}



}
