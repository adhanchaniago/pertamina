<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends Pertamina 
{
	public $page = 20;

	public function __construct()
	{
		parent::__construct();
		$this->per_page = (!$this->input->get('per_page')) ? 20: $this->input->get('per_page');
		$this->page = $this->input->get('page');

		$this->load->model('mjson_location');
		$this->load->js(base_url('assets/public/app/pegawai.js'));
		$this->load->model('mpegawai');

	}

	public function index() 
	{

		$this->page_title->push('Pegawai', 'Data Kepegawaian');

		$this->data = array(
			'title' => "Kepegawaian - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'tampil' => $this->mpegawai->get_tampil()
			
		);

		$this->template->view('Pertamina/pegawai/data-pegawai', $this->data);
	}

	public function create()
	{
		$this->page_title->push('Pegawai', 'Tambah Data Kepegawaian');

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('katagori', 'katagori', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$this->mpegawai->create();

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Kepegawaian - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);

		$this->template->view('Pertamina/pegawai/create-pegawai', $this->data);
	}

	public function update($param = 0)
	{
		$this->page_title->push('Pegawai', 'Update Data Kepegawaian');

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('katagori', 'katagori', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$this->mpegawai->update($param);

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Kepegawaian - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'get' => $this->mpegawai->get($param)
			
		);

		$this->template->view('Pertamina/pegawai/update-pegawai', $this->data);
	}

	public function delete($param = 0)
	{
		$this->mpegawai->delete($param);

		redirect('pegawai');
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */