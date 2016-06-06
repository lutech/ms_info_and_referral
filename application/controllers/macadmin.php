<?php

	class Macadmin extends CI_Controller {
			
	public function index($page = 'accountprofile') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		$this->accountprofile();
	}
	
		
	public function accountprofile($area= 'macadmin', $page = 'accountprofile') {
		
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
}