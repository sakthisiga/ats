<?php

class enquiry_model extends CI_Model {
    
	
	//-------------------------------------------------------------------------------------------
	// Function : Get the Client Details while loading the View/Edit Client page
	//-------------------------------------------------------------------------------------------
	
	public function get_lead_info()
	{
		$query = $this->db->get('lead_info_build_tb');
		return $query->result();
	}
	
	public function get_audit_job_info()
	{
		$query = $this->db->get('audit_jobs_build_tb');
		return $query->result();
	}
	
	public function get_ags_reg_job_info()
	{
		$query = $this->db->get('ags_reg_jobs_build_tb');
		return $query->result();
	}
	
	public function get_tech_job_info()
	{
		$query = $this->db->get('tech_jobs_build_tb');
		return $query->result();
	}
	
	public function get_ags_legal_job_info()
	{
		$query = $this->db->get('ags_legal_jobs_build_tb');
		return $query->result();
	}
}
