<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends Pertamina_Model 
{

	public function data_edit($param = 0)
	{
		return $this->db->get_where('pekerjaan_final', array('id' => $param))->row();

	}

}

/* End of file Mdashboard.php */
/* Location: ./application/models/Mdashboard.php */