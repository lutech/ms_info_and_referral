<?php

	class Provideradmin extends CI_Controller {
			
	public function index($page = 'accountprofile') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		//ACCESS CONTROLLED NAVIGATION
		//---------------------------------------		
		//---------------------------------------
		
		//PROVIDER ACCESS
		//---------------------------------------
		if (isset($_COOKIE['user'])){
			//UNAUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'unauthorizedprovider'){
				
				$this->accountprofile();
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				
				$this->provideraccountprofile();
			}
		}
	}
	
		
	public function provideraccountprofile($area= 'provideradmin', $page = 'provideraccountprofile') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		//ACCESS CONTROLLED NAVIGATION
		//---------------------------------------		
		//---------------------------------------
		
		//PROVIDER ACCESS
		//---------------------------------------
		if (isset($_COOKIE['user'])){
			//UNAUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'unauthorizedprovider'){
				$data['sidenavlinks']  = array(
											'provideraccountprofile' => 'Account Profile'
											);	
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				$data['sidenavlinks']  = array(											
											'provideraccountprofile' => 'Account Profile',
											'providerprofile' => 'Provider Profile'
											);	
			}
		} else {
			$data['sidenavlinks']  = "";
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
						
		
		
		$data['accountname'] = $_COOKIE['username'];
		$data['login'] = $_COOKIE['loginname'];
		$data['usergender'] = $_COOKIE['gender'];
		$data['suffix'] = $_COOKIE['suffix'];
		$data['accountid'] = $_COOKIE['userid'];
						
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_edit_userinfo_modal'] = $this->load->view('pages/shared/_edit_userinfo_modal.php', $data, true);
		$data['_edit_contactinfo_modal'] = $this->load->view('pages/shared/_edit_contactinfo_modal.php', $data, true);
		$data['_edit_accountinfo_modal'] = $this->load->view('pages/shared/_edit_accountinfo_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	public function accountprofile($area= 'provideradmin', $page = 'accountprofile') {
		
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
						
		
		
		$data['accountname'] = $_COOKIE['username'];
		$data['login'] = $_COOKIE['loginname'];
		$data['usergender'] = $_COOKIE['gender'];
		$data['suffix'] = $_COOKIE['suffix'];
		$data['accountid'] = $_COOKIE['userid'];
						
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_edit_userinfo_modal'] = $this->load->view('pages/shared/_edit_userinfo_modal.php', $data, true);
		$data['_edit_contactinfo_modal'] = $this->load->view('pages/shared/_edit_contactinfo_modal.php', $data, true);
		$data['_edit_accountinfo_modal'] = $this->load->view('pages/shared/_edit_accountinfo_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	public function providerprofile($area= 'provideradmin', $page = 'providerprofile') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		//ACCESS CONTROLLED NAVIGATION
		//---------------------------------------		
		//---------------------------------------
		
		//PROVIDER ACCESS
		//---------------------------------------
		if (isset($_COOKIE['user'])){
			//UNAUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'unauthorizedprovider'){
				$data['sidenavlinks']  = array(
											'provideraccountprofile' => 'Account Profile'
											);	
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				$data['sidenavlinks']  = array(											
											'provideraccountprofile' => 'Account Profile',
											'providerprofile' => 'Provider Profile'
											);	
			}
		} else {
			$data['sidenavlinks']  = "";
		}
		
		$data['paymentmethods'] =  array(
						"Cash",
						"Check",
						"Credit",
						"Participating Insurer"
						);
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
						
		
		
		$data['accountname'] = $_COOKIE['username'];
		$data['login'] = $_COOKIE['loginname'];
		$data['usergender'] = $_COOKIE['gender'];
		$data['suffix'] = $_COOKIE['suffix'];
		$data['accountid'] = $_COOKIE['userid'];
						
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_edit_providerserviceinfo_modal'] = $this->load->view('pages/shared/_edit_providerserviceinfo_modal.php', $data, true);
		$data['_edit_providercontactinfo_modal'] = $this->load->view('pages/shared/_edit_providercontactinfo_modal.php', $data, true);
		$data['_edit_serviceinfo_modal'] = $this->load->view('pages/shared/_edit_serviceinfo_modal.php', $data, true);
		$data['_deleteconfirmation_modal'] = $this->load->view('pages/shared/_deleteconfirmation_modal.php', $data, true);
		$data['_submitconfirmation_modal'] = $this->load->view('pages/shared/_submitconfirmation_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
}