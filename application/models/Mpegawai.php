<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends Pertamina_model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_tampil()
	{
		return $this->db->get('pegawai')->result();
	}

	public function get($param = 0)
	{
		return $this->db->get_where('pegawai' , array('id' => $param))->row();
	}

	public function create()
	{
	
		$data = array(
			'nama' => $this->input->post('nama'),
			'katagori' => $this->input->post('katagori'),  
			
		);

		$this->db->insert('pegawai', $data);

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
			'nama' => $this->input->post('nama'),
			'katagori' => $this->input->post('katagori'),  
		);

		$this->db->update('pegawai', $data, array('id' => $param));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data  Di ubah', 
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
		$this->db->delete('pegawai', array('id' => $param));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				'Pegawai dihapus.', 
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

/* End of file Mpegawai.php */
/* Location: ./application/models/Mpegawai.php */