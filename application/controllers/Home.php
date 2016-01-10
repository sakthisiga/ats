<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Home Controller and it operates for Dashboard.
	 * Author: Sakthivel Deivasigamani
	 * Date: 01/07/2016
	 */
	
	public function __construct() {
		parent::__construct();
		$user = $this->session->userdata('user');
		if(!$user)
		{
			$this->logout();
		}
	
	}
	
	public function index()
	{
		$this->dashboard();
	}
	
	public function dashboard()
	{
		$data['main_content'] = 'dashboard_view';
		$this->load->view('inc/template_view', $data);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
	
	
}
