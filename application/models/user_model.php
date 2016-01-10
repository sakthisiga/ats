<?php

class User_model extends CI_Model {
    
	
//-------------------------------------------------------------------------------------------
// Function : Get the Username and Password from DB for login validation
//-------------------------------------------------------------------------------------------
	
    public function get($user, $pass)
    	{  	
	    	$query = $this->db->get_where('user_tb', array('user' => $user, 'pass' => $pass));
	    	$result = $query->result();
	    	return $result;
	    }
    
//-------------------------------------------------------------------------------------------
// Function : Insert the User details into DB
//-------------------------------------------------------------------------------------------
	    
    public function insert($data)
	    {
	        $this->db->insert('user_tb',$data);
	        return $this->db->insert_id();
	    }
	    
//-------------------------------------------------------------------------------------------
// Function : Get the Session Data for Sessions
//-------------------------------------------------------------------------------------------
	
	public function session_data($user_id)
	    {
	    	 $query = $this->db->get_where('user_tb', array('user' => $user_id));
		    	foreach($query->result() as $row)
	        	{
	        		$data[] = $row;
	        	}
	        	return $data;
	    }
	
	       
}
