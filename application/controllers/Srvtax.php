<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Srvtax extends CI_Controller {

	/**
	 * Controller for Service Tax Operations.
	 * Author: Sakthivel Deivasigamani
	 * Date: 01/08/2016
	 */
	
	public function __construct() {
		parent::__construct();
		$this->import_path = realpath(APPPATH . '../temp/data.csv');
		
	
	}
	
	
	public function index()
	{
		
	}
	
	public function addClient()
	{
		$data['main_content'] = 'services/srvtx/add_client_view';
		$this->load->view('inc/template_view', $data);
	}
	public function viewClient()
	{
		$data['clients'] = $this->srvtax_model->get_clients();
		$data['main_content'] = 'services/srvtx/view_client_view';
		$this->load->view('inc/template_view', $data);
	}
	
	
}
