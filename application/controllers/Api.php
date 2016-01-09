<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * Home Controller and it operates for Dashboard.
	 * Author: Sakthivel Deivasigamani
	 * Date: 01/07/2016
	 */
	
	public function do_upload()
	{
		$this->gallery_path_url = realpath(APPPATH . '../files/');
		$config['upload_path'] = $this->gallery_path_url;
		$config['allowed_types'] = 'csv';
		$config['file_name'] = "client_file";
		$config['overwrite'] = TRUE;
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('userfile'))
		{
			$data['error'] = $this->upload->display_errors();
    		$data['title'] = "Error Upload CSV File";
    		
    		
    		$data['main_content'] = 'services/srvtx/client_import_error';
    		$this->load->view('inc/template_view', $data);
    		return false;
	
		}

			$data = array('upload_data' => $this->upload->data());
		
			$filename = $data['upload_data']['full_path'];
			$file = fopen($filename, "r");
					while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
					{
						if($emapData[0] != "")
						{
							$result = $this->db->insert('client_tb', [
									'date' => date("Y-m-d"),
									'cname' => $emapData[0],
									'type' => $emapData[1],
									'cperson' =>$emapData[2],
									'cnumber' => $emapData[3],
									'email' => $emapData[4],
									'address' => $emapData[5],
									'tin' => $emapData[6],
									'cst' => $emapData[7],
									'pan' => $emapData[8],
									'vatuser' => $emapData[9],
									'vatpass' => $emapData[10],
									'fileloc' => $emapData[11],
							]);
							 
						}
						if(!$result)
						{
							echo "Problem in loading data";
							exit;
						}
					}
				
					fclose($file);
					redirect('Srvtax/viewClient?msg_import=success');
	}
	
	public function index()
	{
		
	}
	
	public function move_to_view_clients()
	{
		$data['clients'] = $this->srvtax_model->get_clients();
		$data['main_content'] = 'services/srvtx/view_client_view';
		$this->load->view('inc/template_view', $data);
	}
	
	public function add_client()
	{
		//$this->_require_login();
		 
		$this->output->set_content_type('application_json');
		 
		//Form Validation
		$this->form_validation->set_rules('cdate','Date','required');
		$this->form_validation->set_rules('name','Company Name','required');
		$this->form_validation->set_rules('type','Type','required');
		//$this->form_validation->set_rules('contactperson','Contact Person','required');
		$this->form_validation->set_rules('contactno','Contact Number','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[client_tb.email]');
		//$this->form_validation->set_rules('address','Address','required');
		//$this->form_validation->set_rules('tinno','TIN No','required');
		//$this->form_validation->set_rules('cstno','CST No','required');
		//$this->form_validation->set_rules('panno','PAN No','required');
		//$this->form_validation->set_rules('vatuser','VAT Username','required');
		//$this->form_validation->set_rules('vatpass','VAT Password','required');
		//$this->form_validation->set_rules('fileloc','File Location','required');
		 
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
				'cnumber' => $this->input->post('contactno'),
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
			$this->output->set_output(json_encode([
					'result' => '1',
					'output' => 'New Client Added Sucessfully'
			])); 
			

		}
		else
		{
			$this->output->set_output(json_encode(['result' => '0','output' => 'Problem in adding a Client']));
		}
		
		//$data['main_content'] = 'dashboard_view';
		//$this->load->view('inc/template_view', $data);
	}
}
