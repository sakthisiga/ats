<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

	/**
	 * Enquiry Controller and it operates for New Lead Registrtion, Modify Leads, From Existing customers and allocation of work.
	 * Author: Sakthivel Deivasigamani
	 * Date: 01/15/2016
	 */
	
	public function __construct() {
		parent::__construct();
		$user = $this->session->userdata('user');
		if(!$user)
		{
			$this->logout();
		}
	
	}
	
	public function addLead()
	{
		$data['main_content'] = 'enquiry/add_lead_view';
		$this->load->view('inc/template_view', $data);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
	
}