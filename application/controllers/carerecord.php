<?php

	class Carerecord extends CI_Controller {
			
	public function index($page = 'userprofile') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		$this->userprofile();
	}
	
		
	public function userprofile($area= 'carerecord', $page = 'userprofile') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['races'] =  array(
						"Select a Race",
						"African American",
						"Asian",
						"Caucasian",
						"Middle Eastern",
						"Native American/Alaskan",
						"Pacific Islander",
						"Other"
						);
		$data['counties'] =  array(
						"Select a County",
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		$data['genders'] =  array(
						"Select a Gender",
						"Male",
						"Female",
						"Other"
						);
		$data['sidenavlinks']  = array(
										'userprofile' => 'My Profile',
										//'medicalhistory' => 'My Care History',
										'contacts' => 'My Contacts',
										'myassessments' => 'My Needs Assessments',
										'myproviders' => 'Service Providers'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_edit_userinfo_modal'] = $this->load->view('pages/shared/_edit_userinfo_modal.php', $data, true);
		$data['_edit_contactinfo_modal'] = $this->load->view('pages/shared/_edit_contactinfo_modal.php', $data, true);
		$data['_edit_accountinfo_modal'] = $this->load->view('pages/shared/_edit_accountinfo_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	public function contacts($area= 'carerecord', $page = 'contacts') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['races'] =  array(
						"Select a Race",
						"African American",
						"Asian",
						"Caucasian",
						"Middle Eastern",
						"Native American/Alaskan",
						"Pacific Islander",
						"Other"
						);
		$data['counties'] =  array(
						"Select a County",
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		$data['genders'] =  array(
						"Select a Gender",
						"Male",
						"Female",
						"Other"
						);
		$data['sidenavlinks']  = array(
										'userprofile' => 'My Profile',
										//'medicalhistory' => 'My Care History',
										'contacts' => 'My Contacts',
										'myassessments' => 'My Needs Assessments',
										'myproviders' => 'Service Providers'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_edit_mycontact_modal'] = $this->load->view('pages/shared/_edit_mycontact_modal.php', $data, true);
		$data['_deleteconfirmation_modal'] = $this->load->view('pages/shared/_deleteconfirmation_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	public function medicalhistory($area= 'carerecord', $page = 'medicalhistory') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['races'] =  array(
						"Select a Race",
						"African American",
						"Asian",
						"Caucasian",
						"Middle Eastern",
						"Native American/Alaskan",
						"Pacific Islander",
						"Other"
						);
		$data['counties'] =  array(
						"Select a County",
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		$data['genders'] =  array(
						"Select a Gender",
						"Male",
						"Female",
						"Other"
						);
		$data['sidenavlinks']  = array(
										'userprofile' => 'My Profile',
										'medicalhistory' => 'My Care History',
										'contacts' => 'My Contacts',
										'myassessments' => 'My Needs Assessments',
										'myproviders' => 'Service Providers'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_edit_medicalproblem_modal'] = $this->load->view('pages/shared/_edit_medicalproblem_modal.php', $data, true);
		$data['_edit_allergy_modal'] = $this->load->view('pages/shared/_edit_allergy_modal.php', $data, true);
		$data['_edit_immunization_modal'] = $this->load->view('pages/shared/_edit_immunization_modal.php', $data, true);
		$data['_edit_medication_modal'] = $this->load->view('pages/shared/_edit_medication_modal.php', $data, true);
		$data['_deleteconfirmation_modal'] = $this->load->view('pages/shared/_deleteconfirmation_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	
	public function myassessments($area= 'carerecord', $page = 'myassessments') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['races'] =  array(
						"Select a Race",
						"African American",
						"Asian",
						"Caucasian",
						"Middle Eastern",
						"Native American/Alaskan",
						"Pacific Islander",
						"Other"
						);
		$data['counties'] =  array(
						"Select a County",
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		$data['genders'] =  array(
						"Select a Gender",
						"Male",
						"Female",
						"Other"
						);
		$data['sidenavlinks']  = array(
										'userprofile' => 'My Profile',
										//'medicalhistory' => 'My Care History',
										'contacts' => 'My Contacts',
										'myassessments' => 'My Needs Assessments',
										'myproviders' => 'Service Providers'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_needsassessment_modal'] = $this->load->view('pages/shared/_needsassessment_modal.php', $data, true);
		$data['_needsassessment_wizard'] = $this->load->view('pages/shared/_needsassessment_wizard.php', $data, true);
		$data['_deleteconfirmation_modal'] = $this->load->view('pages/shared/_deleteconfirmation_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	
	public function myproviders($area= 'carerecord', $page = 'myproviders') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['races'] =  array(
						"Select a Race",
						"African American",
						"Asian",
						"Caucasian",
						"Middle Eastern",
						"Native American/Alaskan",
						"Pacific Islander",
						"Other"
						);
		$data['counties'] =  array(
						"Select a County",
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		$data['genders'] =  array(
						"Select a Gender",
						"Male",
						"Female",
						"Other"
						);
		$data['sidenavlinks']  = array(
										'userprofile' => 'My Profile',
										//'medicalhistory' => 'My Care History',
										'contacts' => 'My Contacts',
										'myassessments' => 'My Needs Assessments',
										'myproviders' => 'Service Providers'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_view_provider_modal'] = $this->load->view('pages/shared/_view_provider_modal.php', $data, true);
		$data['_removeconfirmation_modal'] = $this->load->view('pages/shared/_removeconfirmation_modal.php', $data, true);
		$data['_shareserviceinfo_modal'] = $this->load->view('pages/shared/_shareserviceinfo_modal.php', $data, true);
		$data['_sendmessage_modal'] = $this->load->view('pages/shared/_sendmessage_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
}