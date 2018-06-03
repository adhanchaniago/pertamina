<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan_final extends Pertamina 
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
		$this->page_title->push('Pekerjaan Final', 'Data Pekerjaan Final');

		$this->data = array(
			'title' => "Pekerjaan Final - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'get' => $this->mpekerjaan_final->get()
		);

		$this->template->view('Pertamina/pekerjaan_final/data-pekerjaan_final', $this->data);
	}

	public function create()
	{
		$this->page_title->push('Pekerjaan Final', 'Tambah Data Pekerjaan Final');

		$this->form_validation->set_rules('id_pekerjaan', 'Nama Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('pegawai', 'Nama Pegawai', 'trim|required');
		$this->form_validation->set_rules('pengawas', 'Nama Pengawas', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('id_kontraktor', 'Nama Kontraktor', 'trim|required');
		$this->form_validation->set_rules('plan_target', 'Plan Target', 'trim|required');
		$this->form_validation->set_rules('actual_target', 'Actual Target', 'trim|required');
		$this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'trim|required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$this->mpekerjaan_final->create();

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Pekerjaan Final - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'get_pekerjaan' => $this->mpekerjaan_final->get_pekerjaan(),
			//'get_pegawai' => $this->mpekerjaan_final->get_pegawai(),
			'get_pegawai' => $this->mpekerjaan_final->get_pegawai(),
			'get' => $this->mpekerjaan_final->get_kontraktor()
			
		);

		$this->template->view('Pertamina/pekerjaan_final/create-pekerjaan_final', $this->data);
	}

	public function update($param = 0)
	{
		$this->page_title->push('Pekerjaan Final', 'Update Data Pekerjaan Final');

		$this->form_validation->set_rules('id_pekerjaan', 'Nama Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('pegawai', 'Nama Pegawai', 'trim|required');
		$this->form_validation->set_rules('pengawas', 'Nama Pengawas', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('id_kontraktor', 'Nama Kontraktor', 'trim|required');
		$this->form_validation->set_rules('plan_target', 'Plan Target', 'trim|required');
		$this->form_validation->set_rules('actual_target', 'Actual Target', 'trim|required');
		$this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'trim|required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$this->mpekerjaan_final->update($param);

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Pekerjaan Final - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'get_pekerjaan' => $this->mpekerjaan_final->get_pekerjaan(),
			
			'get_pegawai' => $this->mpekerjaan_final->get_pegawai(),
			'get' => $this->mpekerjaan_final->get_kontraktor()
			
		);

		$this->template->view('Pertamina/pekerjaan_final/create-pekerjaan_final', $this->data);
	}

	public function delete($param = 0)
	{
		$this->mpekerjaan_final->delete($param);

		redirect('pekerjaan_final');
	}

}

/* End of file Pekerjaan_final.php */
/* Location: ./application/controllers/Pekerjaan_final.php */