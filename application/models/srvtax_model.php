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
	
	
}
