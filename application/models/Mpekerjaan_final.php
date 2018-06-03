<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpekerjaan_final extends Pertamina_Model 
{

	public function get_pekerjaan()
	{
		return $this->db->get('pekerjaan')->result();
	}

	public function get_pegawai($param = '')
	{
		return $this->db->get_where('pegawai', array('katagori' => $param) )->result();
	}

	public function get_katagori($katagori = 0)
	{
		return $this->db->get('pegawai' , array('id' => $katagori ))->result();
	}

	public function get_kontraktor()
	{
		return $this->db->get('kontraktor')->result();
	}

	public function get()
	{
		return $this->db->get_where('pekerjaan_final')->result();
	}

	public function create()
	{
		$data = array(
			'id_pekerjaan' => $this->input->post('id_pekerjaan'),
			'pegawai' => $this->input->post('pegawai'),
			'pengawas' => $this->input->post('pengawas'),
			'tanggal' => $this->input->post('tanggal'),
			'id_kontraktor' => $this->input->post('id_kontraktor'),
			'plan_target' => $this->input->post('plan_target'),
			'actual_target' => $this->input->post('actual_target'),
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),
			'status' => $this->input->post('status'),
		);

		$this->db->insert('pekerjaan_final', $data);

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Pekerjaan Final tersimpan.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Data Gagal Di simpan.', 
				array('type' => 'warning','icon' => 'warning')
			);
		}
	
	}

	public function update($param = 0)
	{
		$data = array(
			'id_pekerjaan' => $this->input->post('id_pekerjaan'),
			'pegawai' => $this->input->post('pegawai'),
			'pengawas' => $this->input->post('pengawas'),
			'tanggal' => $this->input->post('tanggal'),
			'id_kontraktor' => $this->input->post('id_kontraktor'),
			'plan_target' => $this->input->post('plan_target'),
			'actual_target' => $this->input->post('actual_target'),
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),
			'status' => $this->input->post('status'),
		);

		$this->db->update('pekerjaan_final', $data, array('id' => $param));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Pekerjaan Final Update.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Data Gagal Di Update.', 
				array('type' => 'warning','icon' => 'warning')
			);
		}
	
	}

	public function delete($param = 0)
	{
		$this->db->delete('pekerjaan_final', array('id' => $param));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				'Pekerjaan dihapus.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Tidak ada data yang dihapus.', 
				array('type' => 'warning','icon' => 'warning')
			);
		}
	}

}

/* End of file Mpekerjaa_final.php */
/* Location: ./application/models/Mpekerjaa_final.php */