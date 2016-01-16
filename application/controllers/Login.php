<?php

// Login Class Begins
class Login extends CI_Controller {
	
	/**
	 * Login Controller and it operates for Login, Register and Logout operations.
	 * Author: Sakthivel Deivasigamani
	 * Date: 01/08/2016
	 */
	
	
//-------------------------------------------------------------------------------------------
//Function : Load Home View (Login Page)
//-------------------------------------------------------------------------------------------
	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('user/inc/header_view',$data);
		$this->load->view('user/login_view');
		$this->load->view('user/inc/footer_view');
	}
        
//-------------------------------------------------------------------------------------------
//Function : Loads Register View for New User Registration
//-------------------------------------------------------------------------------------------
        
        public function register()
        {
        	$user = $this->session->userdata('user');
        	if(!$user)
        	{
        		$this->logout();
        	}
        	if($this->session->userdata('group') > 0)
        	{
	        	$data['title'] = "Registration";
	            $this->load->view('inc/header_view',$data);
				$this->load->view('user/register_view',$data);
				$this->load->view('inc/footer_view');
        	}
        	else
        	{
        		redirect('home');
        	}
        }
        
        public function logout()
        {
        	$this->session->sess_destroy();
        	redirect("login");
        }
}

// Login Class Ends