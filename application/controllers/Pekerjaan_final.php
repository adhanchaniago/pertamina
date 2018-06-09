<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan_final extends Pertamina 
{
	public $page = 20;

	public $data = array();
	
	public $query;

	public function __construct()
	{
		parent::__construct();
		$this->per_page = (!$this->input->get('per_page')) ? 20: $this->input->get('per_page');
		$this->page = $this->input->get('page');
		$this->tanggal = $this->input->get('tanggal');

		$this->query = $this->input->get('query');

		$this->load->model('mjson_location');
		$this->load->js(base_url('assets/public/app/pekerjaan_final.js'));
		$this->load->model('mpekerjaan_final');
	}
	public function index()
	{
		$this->page_title->push('Today work', 'Employment Data Today');

		$this->data = array(
			'title' => "Today work - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'get' => $this->mpekerjaan_final->get(),
			'data_edit' => $this->mpekerjaan_final->data_edit(),
			'get_pekerjaan' => $this->mpekerjaan_final->get_pekerjaan(),
			'get_pegawai' => $this->mpekerjaan_final->get_pegawai(),
			'get' => $this->mpekerjaan_final->get_kontraktor()
		);

		$this->template->view('Pertamina/pekerjaan_final/data-pekerjaan_final', $this->data);
	}

	public function create()
	{
		$this->page_title->push('Today work', 'Add Job Data Today');

		$this->form_validation->set_rules('id_pekerjaan', 'Nama Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('id_pegawai[]', 'Nama Pegawai', 'trim|required');
		$this->form_validation->set_rules('pengawas', 'Nama Pengawas', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('id_kontraktor', 'Nama Kontraktor', 'trim|required');
		$this->form_validation->set_rules('plan_target', 'Plan Target', 'trim|required');
		$this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'trim|required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$this->mpekerjaan_final->create();

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Today work - Sistem Monitoring", 
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
		$this->page_title->push('Today work', 'Update Data Work Today');

		$this->form_validation->set_rules('id_pekerjaan', 'Nama Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('id_pegawai[]', 'Nama Pegawai', 'trim|required');
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
			'title' => "Today work - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'data_edit' => $this->mpekerjaan_final->data_edit($param),
			'get_pekerjaan' => $this->mpekerjaan_final->get_pekerjaan($param),
			'get_pegawai' => $this->mpekerjaan_final->get_pegawai($param),
			'get' => $this->mpekerjaan_final->get_kontraktor($param)
			
		);

		$this->template->view('Pertamina/pekerjaan_final/update-pekerjaan_final', $this->data);
	}

	public function update_model($param = 0)
	{
		$this->page_title->push('Pekerjaan Hari ini', 'Update Data Pekerjaan Hari ini');

		$this->form_validation->set_rules('actual_target', 'Actual Target', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$data = array(
			'actual_target' => $this->input->post('actual_target'),
			'status' => $this->input->post('status'),
			);

		$this->db->update('pekerjaan_final', $data, array('id' => $param));

			if($this->db->affected_rows())
			{
				$this->template->alert(
					' Data Pekerjaan Update.', 
					array('type' => 'success','icon' => 'check')
				);
			} else {
				$this->template->alert(
					' Data Gagal Di Update.', 
					array('type' => 'warning','icon' => 'warning')
				);
			}

		}

		$this->data = array(
			'title' => "Pekerjaan Hari ini - Sistem Monitoring", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'data' => $this->mpekerjaan_final->data($param),
			
		);

		$this->template->view('Pertamina/pekerjaan_final/data-pekerjaan_final', $this->data);
	}

	public function delete($param = 0)
	{
		$this->mpekerjaan_final->delete($param);

		redirect('pekerjaan_final');
	}

}

/* End of file Pekerjaan_final.php */
/* Location: ./application/controllers/Pekerjaan_final.php */