<?php

	class Agencyaccess extends CI_Controller {
			
	public function index($page = 'provideraccessinfo') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		//$this->provideraccess();
		$this->load->helper('url');
		$url = base_url().'index.php/agencyaccess/aboutprovideraccess';
		header("Location: $url");
	}
	
		
	public function aboutprovideraccess($area= 'agencyaccess', $page = 'aboutprovideraccess') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$this->load->helper('url');
		$data['area'] = $area;
		$data['page'] = $page;
		//$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		//$data['_edit_provideradditionalinfo_modal'] = $this->load->view('pages/shared/_edit_provideradditionalinfo_modal.php', $data, true);
		$this->load->view("templates/master-layout-aa.php", $data);
	}
	
	public function providerregistration($area= 'agencyaccess', $page = 'providerregistration') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		$data['counties'] =  array(
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		
		$data['paymentmethods'] =  array(
						"Cash",
						"Check",
						"Credit",
						"Participating Insurer"
						);
		$this->load->helper('url');
		$data['area'] = $area;
		$data['page'] = $page;
		//$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		//$data['_edit_provideradditionalinfo_modal'] = $this->load->view('pages/shared/_edit_provideradditionalinfo_modal.php', $data, true);
		$this->load->view("templates/master-layout-aa.php", $data);
	}
	
	public function requestconfirmation($area= 'agencyaccess', $page = 'requestconfirmation') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$this->load->helper('url');
		$data['area'] = $area;
		$data['page'] = $page;
		//$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		//$data['_edit_provideradditionalinfo_modal'] = $this->load->view('pages/shared/_edit_provideradditionalinfo_modal.php', $data, true);
		$this->load->view("templates/master-layout-aa.php", $data);
	}
}