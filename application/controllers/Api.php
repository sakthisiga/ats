<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * Home Controller and it operates for Dashboard.
	 * Author: Sakthivel Deivasigamani
	 * Date: 01/07/2016
	 */
	
	public function index()
	{
		
	}
	
	public function add_client()
	{
		//$this->_require_login();
		 
		$this->output->set_content_type('application_json');
		 
		//Form Validation
		$this->form_validation->set_rules('cdate','Date','required');
		$this->form_validation->set_rules('name','Company Name','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('contactperson','Contact Person','required');
		$this->form_validation->set_rules('contactno','Contact Number','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[client_tb.email]');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('tinno','TIN No','required');
		$this->form_validation->set_rules('cstno','CST No','required');
		$this->form_validation->set_rules('panno','PAN No','required');
		$this->form_validation->set_rules('vatuser','VAT Username','required');
		$this->form_validation->set_rules('vatpass','VAT Password','required');
		$this->form_validation->set_rules('fileloc','File Location','required');
		 
		if($this->form_validation->run() == false)
		{
			$this->output->set_output(json_encode([
					'result' => '0',
					'error' => $this->form_validation->error_array()
			]));
			return false;
		}
		 
		//Inserting data
		$date = date("Y-m-d", strtotime($this->input->post('cdate')));
		$result = $this->db->insert('client_tb', [
				'date' => $date,
				'cname' => $this->input->post('name'),
				'type' => $this->input->post('type'),
				'cperson' => $this->input->post('contactperson'),
				'cnumber' => $this->input->post('contactnumber'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'tin' => $this->input->post('tinno'),
				'cst' => $this->input->post('cstno'),
				'pan' => $this->input->post('panno'),
				'vatuser' => $this->input->post('vatuser'),
				'vatpass' => $this->input->post('vatpass'),
				'fileloc' => $this->input->post('fileloc')
		]);
		 
		if($result)
		{
			// Get fresh list to be posted to DOM
			//$query = $this->db->get_where('client_tb',['client_id' => $this->db->insert_id()]);
			$this->output->set_output(json_encode([
					'result' => '1',
					'output' => 'A new article has been added'
			]));
			return false;
		}
		else
		{
			$this->output->set_output(json_encode(['result' => '0']));
		}
		
		//$data['main_content'] = 'dashboard_view';
		//$this->load->view('inc/template_view', $data);
	}
}
