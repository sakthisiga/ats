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
		$data['lead_info_build'] = $this->enquiry_model->get_lead_info('lead_info_build_tb');
		$data['audit_job_build'] = $this->enquiry_model->get_lead_info('audit_jobs_build_tb');
		$data['ags_reg_job_build'] = $this->enquiry_model->get_lead_info('ags_reg_jobs_build_tb');
		$data['tech_job_build'] = $this->enquiry_model->get_lead_info('tech_jobs_build_tb');
		$data['ags_legal_job_build'] = $this->enquiry_model->get_lead_info('ags_legal_jobs_build_tb');
		
		$data['main_content'] = 'enquiry/add_lead_view';
		$this->load->view('inc/template_view', $data);
	}
	public function viewEditLead()
	{
		$data['leads'] = $this->enquiry_model->get_leads();
		$data['main_content'] = 'enquiry/edit_lead_view';
		$this->load->view('inc/template_view', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
	
}