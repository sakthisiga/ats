<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * API Controller and it operates for all the event operations.
	 * Author: Sakthivel Deivasigamani
	 * Date: 01/08/2016
	 */

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
	
	}
	
	// Function : Check User login status
	
	private function _require_login()
	{
		if($this->session->userdata('user_id') == false)
		{
			$this->output->set_output(json_encode(['result' => '0', 'error' => 'You are not authorized']));
			return false;
		}
	}
	
	//Function : Login into application
	
	public function login()
	{
	
		$this->output->set_content_type('application_json');
	
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == FALSE)
		{
			$this->output->set_output(json_encode(['result' => '0','error' => $this->form_validation->error_array()]));
			return false;
		}
	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = hash('sha256',$password.PASS);

	
		$result = $this->user_model->get($username, $password);
	
	
	
		if($result)
		{
			$data= $this->user_model->session_data($username);
			foreach ($data as $rec)
			{
				$username = $rec->user;
				$group = $rec->group_id;
				$fname = $rec->fname;
				$lname = $rec->lname;
			}
			$this->session->set_userdata([
					'user' => $username,
					'group' => $group,
					'fname' => $fname,
					'lname' => $lname
			]);
	
			$this->output->set_output(json_encode(['result' => '1']));
			return false;
		}
		else
		{
			$this->output->set_output(json_encode(['result' => '2', 'error' => 'Invalid Credentials. Please try with a valid credentials']));
		}
	
	
		$session = $this->session->all_userdata('user');
		//print_r($session);
	}
	
	// Function : New User Registration
	
	public function register()
	{
		$this->output->set_content_type('application_json');
	
		$this->form_validation->set_rules('fname','First Name','required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('lname','Last Name','required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user_tb.email]');
		$this->form_validation->set_rules('group','Group Name','required');
		$this->form_validation->set_rules('user','User Name','required|min_length[2]|max_length[25]|is_unique[user_tb.user]');
		$this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[20]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[4]|max_length[20]');
	
		if($this->form_validation->run() == FALSE)
		{
			$this->output->set_output(json_encode(['result' => '0','error' => $this->form_validation->error_array()]));
			return false;
		}
	
		$password = $this->input->post('password');

	
		$user_id = $this->user_model->insert([
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'group_id' => $this->input->post('group'),
				'user' => $this->input->post('user'),
				'pass' => hash('sha256',$password.PASS)
		]);
	
	
		if($user_id)
		{
			$this->session->set_userdata([
					'user' => $this->input->post('user'),
					'group' => $this->input->post('group'),
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname')
			]);
			$this->output->set_output(json_encode(['result' => '1']));
			return false;
		}
		else
		{
			$this->output->set_output(json_encode(['result' => '0', 'error' => 'User not Created']));
		}
	
	
		$session = $this->session->all_userdata('user_id');
		//print_r($session);
	}
	
	// Function : Upload the client data csv file
	
	public function do_upload()
	{
		$this->gallery_path_url = realpath(APPPATH . '../files/');
		$config['upload_path'] = $this->gallery_path_url;
		$config['allowed_types'] = 'csv';
		$config['file_name'] = "client_file";
		$config['overwrite'] = TRUE;
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('userfile'))
		{
			$data['error'] = $this->upload->display_errors();
    		$data['title'] = "Error Upload CSV File";
    		
    		
    		$data['main_content'] = 'services/srvtx/client_import_error';
    		$this->load->view('inc/template_view', $data);
    		return false;
	
		}

			$data = array('upload_data' => $this->upload->data());
		
			$filename = $data['upload_data']['full_path'];
			$file = fopen($filename, "r");
					while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
					{
						if($emapData[0] != "")
						{
							$result = $this->db->insert('client_tb', [
									'date' => date("Y-m-d"),
									'cname' => $emapData[0],
									'type' => $emapData[1],
									'cperson' =>$emapData[2],
									'cnumber' => $emapData[3],
									'email' => $emapData[4],
									'address' => $emapData[5],
									'tin' => $emapData[6],
									'cst' => $emapData[7],
									'pan' => $emapData[8],
									'vatuser' => $emapData[9],
									'vatpass' => $emapData[10],
									'fileloc' => $emapData[11],
							]);
							 
						}
						if(!$result)
						{
							echo "Problem in loading data";
							exit;
						}
					}
				
					fclose($file);
					redirect('Srvtax/viewClient?msg_import=success');
	}
	
	// Function : View client with data from client_tb
	
	public function move_to_view_clients()
	{
		$data['clients'] = $this->srvtax_model->get_clients();
		$data['main_content'] = 'services/srvtx/view_client_view';
		$this->load->view('inc/template_view', $data);
	}



	// Function : Update the Tech jobs information
	
	public function update_legal_jobs()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('lead_id');
		$service = $this->input->post('service');
		$checked = $this->input->post('checked');
		

		$data = array(
               $service => $checked
            );

		$this->db->where('lead_id', $lead_id);
		$res = $this->db->update('ags_legal_jobs_tb', $data);
		
		$result = $this->db->affected_rows();
		if($result)
		{
				$this->output->set_output(json_encode([
						'result' 	=> 	'1',
						'output'	=>	'Legal Jobs Updated'
				]));
		}

	}


	// Function : Update the Tech jobs information
	
	public function update_tech_jobs()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('lead_id');
		$service = $this->input->post('service');
		$checked = $this->input->post('checked');
		

		$data = array(
               $service => $checked
            );

		$this->db->where('lead_id', $lead_id);
		$res = $this->db->update('tech_jobs_tb', $data);
		
		$result = $this->db->affected_rows();
		if($result)
		{
				$this->output->set_output(json_encode([
						'result' 	=> 	'1',
						'output'	=>	'Tech Jobs Updated'
				]));
		}

	}


	// Function : Update the AGS Reg jobs information
	
	public function update_ags_reg_jobs()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('lead_id');
		$service = $this->input->post('service');
		$checked = $this->input->post('checked');
		

		$data = array(
               $service => $checked
            );

		$this->db->where('lead_id', $lead_id);
		$res = $this->db->update('ags_reg_jobs_tb', $data);
		
		$result = $this->db->affected_rows();
		if($result)
		{
				$this->output->set_output(json_encode([
						'result' 	=> 	'1',
						'output'	=>	'AGS Reg Jobs Updated'
				]));
		}

	}

	// Function : Update the Audit jobs information
	
	public function update_audit_jobs()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('lead_id');
		$service = $this->input->post('service');
		$checked = $this->input->post('checked');
		

		$data = array(
               $service => $checked
            );

		$this->db->where('lead_id', $lead_id);
		$res = $this->db->update('audit_jobs_tb', $data);
		
		$result = $this->db->affected_rows();
		if($result)
		{
				$this->output->set_output(json_encode([
						'result' 	=> 	'1',
						'output'	=>	'Audit Jobs Updated'
				]));
		}

	}

	// Function : Update the company information 
	
	public function update_company()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('lead_id');
		$service = $this->input->post('service');
		$checked = $this->input->post('checked');
		

		$data = array(
               $service => $checked
            );

		$this->db->where('lead_id', $lead_id);
		$res = $this->db->update('incorporation_tb', $data);
		
		$result = $this->db->affected_rows();
		if($result)
		{
				$this->output->set_output(json_encode([
						'result' 	=> 	'1',
						'output'	=>	'Company Information Updated'
				]));
		}

	}
	// Function : Get the Lead information for edit
	
	public function edit_lead_info()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('id');
		
		//$this->db->where(['lead_id' => $lead_id]);
		//$query = $this->db->get('lead_info_tb');

		//Get the lead basic information
		$query_1 = $this->db->query('select * from lead_info_tb
								  	WHERE lead_id = '.$lead_id.'');

		$query_2 = $this->db->query('select * from incorporation_tb
									WHERE lead_id = '.$lead_id.'');
					
		$query_3 = $this->db->query('select * from audit_jobs_tb
									WHERE lead_id = '.$lead_id.'');
					
		$query_4 = $this->db->query('select * from ags_reg_jobs_tb
									WHERE lead_id = '.$lead_id.'');

		$query_5 = $this->db->query('select * from tech_jobs_tb
									WHERE lead_id = '.$lead_id.'');

		$query_6 = $this->db->query('select * from ags_legal_jobs_tb
									WHERE lead_id = '.$lead_id.'');

		//Get Company Registration Detail

		$this->output->set_output(json_encode([
        			'result' => '1',
        			'data' => $query_1->result(),
        			'data_2' => $query_2->result(),
        			'data_audit_jobs' => $query_3->result(),
        			'data_ags_reg_jobs' => $query_4->result(),
        			'data_tech_jobs' => $query_5->result(),
        			'data_legal_jobs' => $query_6->result(),
        			'group' => $_SESSION["group"]

        	]));
        	return false;

	}
	
	// Function : Add a New Client
	
	public function add_client()
	{
		//$this->_require_login();
		 
		$this->output->set_content_type('application_json');
		 
		//Form Validation
		$this->form_validation->set_rules('cdate','Date','required');
		$this->form_validation->set_rules('name','Company Name','required');
		$this->form_validation->set_rules('type','Type','required');
		//$this->form_validation->set_rules('contactperson','Contact Person','required');
		$this->form_validation->set_rules('contactno','Contact Number','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[client_tb.email]');
		//$this->form_validation->set_rules('address','Address','required');
		//$this->form_validation->set_rules('tinno','TIN No','required');
		//$this->form_validation->set_rules('cstno','CST No','required');
		//$this->form_validation->set_rules('panno','PAN No','required');
		//$this->form_validation->set_rules('vatuser','VAT Username','required');
		//$this->form_validation->set_rules('vatpass','VAT Password','required');
		//$this->form_validation->set_rules('fileloc','File Location','required');
		 
		if($this->form_validation->run() == false)
		{
			$this->output->set_output(json_encode([
					'result' => '0',
					'error' => $this->form_validation->error_array()
			]));
			return false;
		}
		 
		//Inserting data
		$date = date("Y-m-d", strtotime($this->input->post('cdate')));
		$result = $this->db->insert('client_tb', [
				'date' => $date,
				'cname' => $this->input->post('name'),
				'type' => $this->input->post('type'),
				'cperson' => $this->input->post('contactperson'),
				'cnumber' => $this->input->post('contactno'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'tin' => $this->input->post('tinno'),
				'cst' => $this->input->post('cstno'),
				'pan' => $this->input->post('panno'),
				'vatuser' => $this->input->post('vatuser'),
				'vatpass' => $this->input->post('vatpass'),
				'fileloc' => $this->input->post('fileloc')
		]);
		 
		if($result)
		{
			// Get fresh list to be posted to DOM
			$this->output->set_output(json_encode([
					'result' => '1',
					'output' => 'New Client Added Sucessfully'
			])); 
			

		}
		else
		{
			$this->output->set_output(json_encode(['result' => '0','output' => 'Problem in adding a Client']));
		}
		
		//$data['main_content'] = 'dashboard_view';
		//$this->load->view('inc/template_view', $data);
	}

	// Function : Update an Existing Client
	
	public function update_client()
	{
		//$this->_require_login();
		$this->output->set_content_type('application_json');
		 
		$this->form_validation->set_rules('hcid','Client ID','required');
		$this->form_validation->set_rules('cname','Company Name','required');
		$this->form_validation->set_rules('type','Type','required');
		//$this->form_validation->set_rules('contactperson','Contact Person','required');
		$this->form_validation->set_rules('cnumber','Contact Number','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		//$this->form_validation->set_rules('address','Address','required');
		//$this->form_validation->set_rules('tinno','TIN No','required');
		//$this->form_validation->set_rules('cstno','CST No','required');
		//$this->form_validation->set_rules('panno','PAN No','required');
		//$this->form_validation->set_rules('vatuser','VAT Username','required');
		//$this->form_validation->set_rules('vatpass','VAT Password','required');
		//$this->form_validation->set_rules('fileloc','File Location','required');
		 
		if($this->form_validation->run() == false)
		{
			$this->output->set_output(json_encode([
					'result' => '0',
					'error' => $this->form_validation->error_array()
			]));
			return false;
		}
		 
		$cid = $this->input->post('cid');
	
		$this->db->where(['client_id' => $this->input->post('hcid')]);
		$this->db->update('client_tb',[
				'cname' => $this->input->post('cname'),
				'type' => $this->input->post('type'),
				'cperson' => $this->input->post('cperson'),
				'cnumber' => $this->input->post('cnumber'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'tin' => $this->input->post('tin'),
				'cst' => $this->input->post('cst'),
				'pan' => $this->input->post('pan'),
				'vatuser' => $this->input->post('vatuser'),
				'vatpass' => $this->input->post('vatpass'),
				'fileloc' => $this->input->post('fileloc')
		]);
		 
		$result = $this->db->affected_rows();
		
		 
		if($result)
		{
			$this->output->set_output(json_encode([
					'result' => '1',
					'output' => 'Client details updated successfully'
			]));
			return false;
		}
		else
		{
			$this->output->set_output(json_encode([
					'result' => '2',
					'output' => 'No changes made, please edit any field before clicking the "Update" button'
			]));
			return false;
		}
		 
	}
	
	// Function : Update an Existing Client
	
	public function add_lead()
	{
		$this->output->set_content_type('application_json');

		if($this->input->post('lib')==true || $this->input->post('ajb')==true || $this->input->post('arj')==true || $this->input->post('tj')==true || $this->input->post('alj')==true)
		{
			$date = date('Y-m-d');
			$lead_info = $this->enquiry_model->add_lead_info([
					'date'		=> 	$date,
					'source' 	=> 	$this->input->post('source'),
					'name_1' 	=> 	$this->input->post('name1'),
					'name_2' 	=> 	$this->input->post('name2'),
					'contact_1' => 	$this->input->post('contact1'),
					'contact_2' => 	$this->input->post('contact2'),
					'email_1' 	=> 	$this->input->post('email1'),
					'email_2' 	=> 	$this->input->post('email2'),
					'user'		=>	$this->session->userdata('user'),
					'status'	=> 'Active'
			]);
			
			$insert_id = $this->db->insert_id();
				
			if(NULL !== ($insert_id))
			{
						

				//Creating Session ID of Lead ID.
				$session_lead_id = sprintf("%010d", $insert_id);
				$_SESSION["lead_id"] = $session_lead_id;
				
				//Loading Incorporation information into DB
				$lib = $this->input->post('lib');
				$this->db->set('lead_id', $insert_id);
				if( !empty($lib) ) {
					foreach ($lib as $value){
						$this->db->set($value, 'Y');
					}
				}
				$incorp = $this->db->insert('incorporation_tb');
				
				//Loading audit job information into DB
				$ajb = $this->input->post('ajb');
				$this->db->set('lead_id', $insert_id);
				if( !empty($ajb) ) {
					foreach ($ajb as $value){
						$this->db->set($value, 'Y');
					}
				}
				$audit_jobs = $this->db->insert('audit_jobs_tb');
				
				
				//Loading ags registration jobs into DB 
				$arj = $this->input->post('arj');
				$this->db->set('lead_id', $insert_id);
				if( !empty($arj) ) {
					foreach ($arj as $value){
						$this->db->set($value, 'Y');
					}
				}
				$ags_reg_jobs = $this->db->insert('ags_reg_jobs_tb');
				
				//Loading ags registration jobs into DB
				$tj = $this->input->post('tj');
				$this->db->set('lead_id', $insert_id);
				if( !empty($tj) ) {
					
					foreach ($tj as $value){
						$this->db->set($value, 'Y');
					}
				}
				$tech_jobs = $this->db->insert('tech_jobs_tb');
				
				//Loading ags registration jobs into DB
				$alj = $this->input->post('alj');
				$this->db->set('lead_id', $insert_id);
				if( !empty($alj) ) {
					foreach ($alj as $value){
						$this->db->set($value, 'Y');
					}
				}
				$ags_legal_jobs = $this->db->insert('ags_legal_jobs_tb');
				
				$this->output->set_output(json_encode(['result' => '1']));
			}
		}
		else
		{
			$this->output->set_output(json_encode([
						'result' 	=> 	'0',
						'output'	=>	'Please select a job, before submitting the Lead'
				]));
		}
	
	}
	
	// Function : Reject the Lead
	
	public function reject_lead()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('lead_id');
		$reject_reason = $this->input->post('reason');
		
		$this->db->where('lead_id', $lead_id);
		$this->db->update('lead_info_tb', array('status' => 'Reject', 'reject_reason' => $reject_reason));
		
		$result = $this->db->affected_rows();

		if($result)
		{
				$this->output->set_output(json_encode([
						'result' 	=> 	'1',
						'output'	=>	'<b>LD'.$lead_id.'</b> has been Rejected'
				]));
		}

	}


// Function : Delete the Lead permanently
	
	public function delete_lead()
	{
		
		$this->output->set_content_type('application_json');

		$lead_id = $this->input->post('lead_id');
		
		$this->db->where('lead_id', $lead_id);
		$this->db->delete('lead_info_tb');
		
		$result = $this->db->affected_rows();

		if($result)
		{
				$this->output->set_output(json_encode([
						'result' 	=> 	'1',
						'output'	=>	'<b>LD'.$lead_id.'</b> has been Deleted'
				]));
		}

	}


// Function : Update Lead Information
	
	public function update_lead()
	{
			//$this->_require_login();
		 
		$this->output->set_content_type('application_json');
		 
		//Form Validation
		$this->form_validation->set_rules('name1','Name (P)','required');
		$this->form_validation->set_rules('contact1','Contact (P)','required');
		$this->form_validation->set_rules('email1','Email (P)','required');
		
		 
		if($this->form_validation->run() == false)
		{
			$this->output->set_output(json_encode([
					'result' => '0',
					'error' => $this->form_validation->error_array()
			]));
			return false;
		}
		 

		 $lead_id = substr($this->input->post('leadid'),2);

		//updating data
		$data = array(
               'name_1' => $this->input->post('name1'),
               'name_2' => $this->input->post('name2'),
               'contact_1' => $this->input->post('contact1'),
               'contact_2' => $this->input->post('contact2'),
               'email_1' => $this->input->post('email1'),
               'email_2' => $this->input->post('email2')
            );

		$this->db->where('lead_id', $lead_id);
		$this->db->update('lead_info_tb', $data);
		
		$result = $this->db->affected_rows();

		if($result)
		{
			// Get fresh list to be posted to DOM
			$this->output->set_output(json_encode([
					'result' => '1',
					'output' => 'Lead Updated Sucessfully'
			])); 
			return false;

		}
		else
		{
			$this->output->set_output(json_encode([
					'result' => '2',
					'output' => 'No changes made, please edit any field before clicking the "Update" button'
			]));
			return false;
		}
		
		//$data['main_content'] = 'dashboard_view';
		//$this->load->view('inc/template_view', $data);
	}

	public function assign_job()
	{
		echo $this->input->post('lead_id');
	}
}
