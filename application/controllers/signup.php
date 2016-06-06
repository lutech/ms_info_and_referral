<?php

	class Signup extends CI_Controller {
			
	public function index($page = 'signup') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		$data['page'] = $page;
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
		$data['section'] = "";
		$data['mainlinks'] = array(
									'home' => 'Home',
									'providers' => 'Find Services',
									'info' => 'Help & Info',
									$section  => 'My Care Record'
									);
		$this->load->helper('url');
		$this->load->view("templates/master-layout.php", $data);		
		
	}
	
}