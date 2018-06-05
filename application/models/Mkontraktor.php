<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkontraktor extends Pertamina_Model 
{
	public function get_tampil()
	{
		$this->db->select('*');
		$this->db->from('kontraktor');
		$this->db->join('pegawai', '.pegawai.id_pegawai = kontraktor.id_pegawai','LEFT');

		//$this->db->group_by('tbl_kriteria.nama_kriteria', $param);
		//$this->db->order_by('tbl_kriteria.id_kriteria', 'ASC');

		return $this->db->get()->result();
	}
	
	public function get($param = 0)
	{	
		// $this->db->select('*');
		// $this->db->from('kontraktor');
		// $this->db->join('pegawai', 'pegawai.id_pegawai = kontraktor.id_pegawai','LEFT');
		// //$this->db->where('kontraktor', $param);
		// return $this->db->get()->row();
		return $this->db->get_where('kontraktor' , array('id'=> $param))->row();
	}

	public function get_pegawai()
	{
		return $this->db->get('pegawai')->result();
	}

	public function ambil($param = 0)
	{
		return $this->db->get_where('pegawai', array('id_pegawai' => $param))->row();
	}


	public function get_katagori($katagori = 0)
	{
		return $this->db->get('pegawai' , array('id' => $katagori ))->result();
	}

	public function create()
	{
	
		$data = array(
			'nama' => $this->input->post('nama'),
			'jenis' => $this->input->post('jenis'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'direktur' => $this->input->post('direktur'),
			'sekretaris' => $this->input->post('sekretaris'),
			'HSSE' => $this->input->post('HSSE'),
		);

		$this->db->insert('kontraktor', $data);

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Kontraktor tersimpan.', 
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
			'jenis' => $this->input->post('jenis'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'direktur' => $this->input->post('direktur'),
			'sekretaris' => $this->input->post('sekretaris'),
			'HSSE' => $this->input->post('HSSE'),
		);

		$this->db->update('kontraktor', $data ,array('id' => $param ));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Kontraktor Update.', 
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
		$this->db->delete('kontraktor', array('id' => $param));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				'Data Kontraktor dihapus.', 
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

/* End of file Mkontraktor.php */
/* Location: ./application/models/Mkontraktor.php */