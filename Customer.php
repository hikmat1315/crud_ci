<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//Do your magic here
	$this->load->model('cust');	
}
	public function index()
	{
		$data['customer'] = $this->cust->getData('ms_customer')->result_array();
		$this->load->view('Customer', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['customer'] = $this->cust->getEdit($id)->row();
		$this->load->view('edit', $data);
		// echo $id;
	}

	public function update()
	{
		$this->cust->update();
		redirect('Customer','refresh');
	}

	public function insert()
	{
		$this->load->view('insert');
	}

	public function insert_data()
	{
		$this->cust->insert();
		redirect('Customer','refresh');
		
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->cust->delete($id);
		redirect('Customer','refresh');
	}
}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */