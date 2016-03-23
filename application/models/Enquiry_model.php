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
	
}
