
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Pertamina 
{
	public $page = 20;

	public function __construct()
	{
		parent::__construct();
		$this->per_page = (!$this->input->get('per_page')) ? 20: $this->input->get('per_page');
		$this->page = $this->input->get('page');

		$this->load->model('mjson_location');
		$this->load->js(base_url('assets/public/app/history.js'));
		$this->load->model('mhistory');
		$this->load->model('mpekerjaan_final');
	}
	public function index()
	{
		$this->page_title->push('History', 'Data History');

		$this->data = array(
			'title' => "History - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'get' => $this->mhistory->get()
		);

		$this->template->view('Pertamina/history/data-history', $this->data);
	}

	public function delete($param = 0)
	{
		$this->mhistory->delete($param);

		redirect('history');
	}

}

/* End of file History.php */
/* Location: ./application/controllers/History.php */