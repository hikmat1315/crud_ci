<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cust extends CI_Model {

	public function getData($table)
		{
			return $this->db->get($table);
		}	

	public function getEdit($id)
	{
		return $this->db->get_where('ms_customer', ['id_customer' => $id]);

	}

	public function update()
	{
		$data = [
			'nama_customer' => $this->input->post('nama'),

		];		

		$this->db->update('ms_customer', $data,['id_customer' => $this->input->post('id')]);	
	}


	public function insert()
	{
		$data = [
			'nama_customer' => $this->input->post('nama'),
		];		

		$this->db->insert('ms_customer', $data);
	}

	public function delete($id)
	{
		$this->db->delete('ms_customer', ['id_customer' => $id]);
	}

}

/* End of file customer.php */
/* Location: ./application/models/customer.php */