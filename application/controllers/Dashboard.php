<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->js(base_url('assets/public/app/pekerjaan_final.js'));
		$this->load->model('mpekerjaan_final');

	}
	public function index($param = 0) 
	{
		$this->data = array(
			'title' => "Pertamina", 
			'get_data' => $this->mpekerjaan_final->data_edit(),
		);

		$this->load->view('Pertamina/slider_pertamina', $this->data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */