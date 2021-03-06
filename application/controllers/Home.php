<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Pertamina {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('mjson_location');
		$this->load->model('mpekerjaan_final');

	}

	public function index() 
	{

		$this->page_title->push('Home', 'Selamat datang di Sistem Monitoring Pekerjaan');

		$this->data = array(
			'title' => "Home - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);

		$this->template->view('Pertamina/v_home', $this->data);
	}
}
