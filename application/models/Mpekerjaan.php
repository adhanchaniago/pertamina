<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpekerjaan extends Pertamina_model 
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_tampil()
	{
		return $this->db->get('pekerjaan')->result();
	}

		public function get($param = 0)
	{
		return $this->db->get_where('pekerjaan' , array('id' => $param))->row();
	}

	public function create()
	{
	
		$data = array(
			'no_pekerjaan' => $this->input->post('no_pekerjaan'),
			'nama_pekerjaan' => $this->input->post('nama_pekerjaan'), 
			'keterangan' => $this->input->post('keterangan'),  
			
		);

		$this->db->insert('pekerjaan', $data);

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data  tersimpan.', 
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
			'no_pekerjaan' => $this->input->post('no_pekerjaan'),
			'nama_pekerjaan' => $this->input->post('nama_pekerjaan'), 
			'keterangan' => $this->input->post('keterangan'),  
			
		);

		$this->db->update('pekerjaan', $data, array('id' => $param));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Pekerjaan Di ubah', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Gagal melakukan perubahan.', 
				array('type' => 'warning','icon' => 'warning')
			);
		}
	
	}

	public function delete($param = 0)
	{
		$this->db->delete('pekerjaan', array('id' => $param));

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

/* End of file Mpekerjaan.php */
/* Location: ./application/models/Mpekerjaan.php */