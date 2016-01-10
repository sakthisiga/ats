<?php

class srvtax_model extends CI_Model {
    
	
	//-------------------------------------------------------------------------------------------
	// Function : Get the Client Details while loading the View/Edit Client page
	//-------------------------------------------------------------------------------------------
	
	public function get_clients()
	{
		$query = $this->db->get('client_tb');
		return $query->result();
	}
	
	public function get_types()
	{
		$this->db->order_by('type','ASC');
		$q = $this->db->get('type_tb');
		foreach($q->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	
}
