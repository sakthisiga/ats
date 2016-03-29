<?php

class enquiry_model extends CI_Model {
    
	
	//-------------------------------------------------------------------------------------------
	// Function : Get the Lead Details while loading the Add Lead page
	//-------------------------------------------------------------------------------------------
	
	public function get_lead_info($tb)
	{
		$query = $this->db->get($tb);
		return $query->result();
	}
	
	public function add_lead_info($data)
	{
		$this->db->insert('lead_info_tb',$data);
		return $this->db->insert_id();
	}

	public function get_leads()
	{
		$query = $this->db->query('select
			    					a.lead_id as lid, a.*, a.*, b.*, c.*
								  	FROM lead_info_tb a 
								  	LEFT OUTER JOIN incorporation_tb b 
								  		ON a.lead_id = b.lead_id
								  	LEFT OUTER JOIN audit_jobs_tb c 
								  	 	ON a.lead_id = c.lead_id
								  	ORDER BY lid
								 ');
    	//$this->db->from('lead_info_tb lit, incorporation_tb it, audit_jobs_tb ajt');
	    //$this->db->where('lit.lead_id = ajt.lead_id');
	    //$this->db->where('lit.lead_id = it.lead_id');
    	//$this->db->where('r.permissions = u.permissions');

		//$query = $this->db->get();
		return $query->result();
	}
	
}
