<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Pertamina 
{
	public $page = 20;
	
	public function __construct()
	{
		parent::__construct();
		$this->per_page = (!$this->input->get('per_page')) ? 20: $this->input->get('per_page');
		$this->page = $this->input->get('page');

		$this->load->model('mjson_location');
		$this->load->js(base_url('assets/public/app/pekerjaan_final.js'));
		$this->load->model('mpekerjaan_final');

	}
	public function index() 
	{
		$this->load->view('Pertamina/slider_pertamina');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */