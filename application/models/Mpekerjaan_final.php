<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpekerjaan_final extends Pertamina_Model 
{
	public function __construct()

	{
		parent::__construct();
	}

	public function get_all($limit = 20, $offset = 0, $type = 'result')
	{
		if($this->input->get('query') != '')
			$this->db->like('tanggal', $this->input->get('query'))
					 ->or_like('tanggal', $this->input->get('query'));
		
		if($type == 'result')
		{
			return $this->db->get('pekerjaan_final', $limit, $offset)->result();
		} else {
			return $this->db->get('pekerjaan_final')->num_rows();
		}
	}


	public function get_pekerjaan()
	{
		return $this->db->get_where('pekerjaan')->result();
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

	public function dashboard($param = 0)
	{
		return $this->db->get_where('pegawai' , array('katagori' => $param ))->row();
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

	public function data()
	{
		return $this->db->get_where('pekerjaan_final')->result();

	}

	public function data_model($param = 0)
	{
		return $this->db->get_where('pekerjaan_final', array('id' => $param))->row();

	}

	public function data_edit($param = 0)
	{
		return $this->db->get_where('pekerjaan_final', array('id' => $param))->row();

	}

	public function get_edit($param = 0)
	{
		return $this->db->get_where('pekerjaan' , array('id' => $param))->row();
	}

	public function create()
	{	
		$data = array(
			'id_pekerjaan' => $this->input->post('id_pekerjaan'),
			'id_pegawai' => implode(",", $this->input->post('id_pegawai')),
			'pengawas' => $this->input->post('pengawas'),
			'tanggal' => $this->input->post('tanggal'),
			'id_kontraktor' => $this->input->post('id_kontraktor'),
			'plan_target' => $this->input->post('plan_target'),
			'actual_target' => Null,
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),
			'status' => $this->input->post('status'),
			'sekarang' => date("Y-m-d H:i:s"),

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
	public function durasi($jam_mulai ='', $jam_selesai ='')
	{
		return (strtotime($jam_mulai)-strtotime($jam_selesai));
	}

	public function update($param = 0)
	{
		$data = array(
			'id_pekerjaan' => $this->input->post('id_pekerjaan'),
			'id_pegawai' => implode(",", $this->input->post('id_pegawai')),
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