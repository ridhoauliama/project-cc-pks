<?php

class Preferensi_model extends CI_Model
{
	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('t_preferensi');
		$this->db->where('costcenter', $this->session->userdata('costcenter'));
		$this->db->or_where('kode_preferensi <', 11);
		return $this->db->get()->result_array();
	}

	public function get_all_for_transaksi()
	{
		$this->db->select('*');
		$this->db->from('t_preferensi');
		$this->db->where('costcenter', $this->session->userdata('costcenter'));
		$this->db->where('kode_preferensi >', 10);
		return $this->db->get()->result_array();
	}

	public function max_id()
	{
		$q = $this->db->query('SELECT max(kode_preferensi) AS max_id FROM t_preferensi')->row_array();
		return $q['max_id'] + 1;
	}

	public function tambah()
	{
		$this->db->set('uraian_preferensi', $this->input->post('uraian_preferensi', true));
		$this->db->set('satuan_preferensi', $this->input->post('satuan_preferensi', true));
		$this->db->set('harga_preferensi', $this->input->post('harga_preferensi', true));
		$this->db->set('costcenter', $this->session->userdata('costcenter'));
		return $this->db->insert('t_preferensi');
	}

	public function edit()
	{
		$this->db->set('uraian_preferensi', $this->input->post('uraian_preferensi', true));
		$this->db->set('satuan_preferensi', $this->input->post('satuan_preferensi', true));
		$this->db->set('harga_preferensi', $this->input->post('harga_preferensi', true));
		$this->db->where('kode_preferensi', intval($this->input->post('kode_preferensi', true)));
		return $this->db->update('t_preferensi');
	}
}
