<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhistory extends Pertamina_Model 
{

	public function get_pekerjaan()
	{
		return $this->db->get('pekerjaan')->result();
	}

	public function get_pegawai($param = '')
	{
		return $this->db->get_where('pegawai', array('katagori' => $param) )->result();
	}

	public function get_pengawas($param = 0)
	{
		return $this->db->get_where('pegawai', array('id_pegawai' => $param) )->row();
	}

	public function data_kontraktor($param = 0)
	{
		return $this->db->get_where('kontraktor', array('id' => $param) )->row();
	}

	public function get_katagori($katagori = 0)
	{
		return $this->db->get('pegawai' , array('id_pegawai' => $katagori ))->result();
	}

	public function get_kontraktor()
	{
		return $this->db->get('kontraktor')->result();
	}

	public function get()
	{	
		$this->db->select('kontraktor.*, pekerjaan_final.id AS id, kontraktor.id  AS nama_pekerjaan');
		$this->db->from('pekerjaan_final');
		$this->db->join('kontraktor', 'kontraktor.id = pekerjaan_final.id', 'left');
		return $this->db->get()->result();
	}

	public function data($param = 'closed')
	{
		return $this->db->get_where('pekerjaan_final', array('status' => $param))->result();

	}

	public function data_edit($param = 0)
	{
		return $this->db->get_where('pekerjaan_final', array('id' => $param))->row();

	}

	public function get_edit($param = 0)
	{
		return $this->db->get_where('pekerjaan' , array('id' => $param))->row();
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

/* End of file Mhistory.php */
/* Location: ./application/models/Mhistory.php */