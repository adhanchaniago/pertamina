<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends Pertamina 
{

	public $page = 20;

	public function __construct()
	{
		parent::__construct();
		$this->per_page = (!$this->input->get('per_page')) ? 20: $this->input->get('per_page');
		$this->page = $this->input->get('page');

		$this->load->model('mjson_location');
		$this->load->js(base_url('assets/public/app/pekerjaan.js'));
		$this->load->model('mpekerjaan');

	}

	public function index() 
	{

		$this->page_title->push('Employment', 'Employment data');

		$this->data = array(
			'title' => "'Employment data' - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'pekerjaan' => $this->mpekerjaan->get_tampil()
			
		);

		$this->template->view('Pertamina/pekerjaan/data-pekerjaan', $this->data);
	}

	public function create()
	{
		$this->page_title->push('Employment data', 'Add Employment Data');
		$this->form_validation->set_rules('no_pekerjaan', 'Employment Number', 'trim|required');
		$this->form_validation->set_rules('nama_pekerjaan', 'Employment Name', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Information details', 'trim|required');
		$this->form_validation->set_rules('detail_keterangan', 'Detail Keterangan', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$this->mpekerjaan->create();

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Employment - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);

		$this->template->view('Pertamina/pekerjaan/create-pekerjaan', $this->data);
	}

	public function update($param = 0)
	{
		$this->page_title->push('Employment', 'Update Employment Data');

		$this->form_validation->set_rules('no_pekerjaan', 'Nomor Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('nama_pekerjaan', 'Nama Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('detail_keterangan', 'Detail Keterangan', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$this->mpekerjaan->update($param);

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Pekerjaan - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'get' => $this->mpekerjaan->get($param),
			
		);

		$this->template->view('Pertamina/pekerjaan/update-pekerjaan', $this->data);
	}

	public function delete($param = 0)
	{
		$this->mpekerjaan->delete($param);

		redirect('pekerjaan');
	}
}

/* End of file Pekerjaan.php */
/* Location: ./application/controllers/Pekerjaan.php */