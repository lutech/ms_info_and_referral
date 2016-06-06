<?php

	class Requests extends CI_Controller {
			
	public function index($page = 'pendingrequests') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		$this->pendingrequests();
	}
	
		
	public function pendingrequests($area= 'requests', $page = 'pendingrequests') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$data['sidenavlinks']  = array(
										'pendingrequests' => 'Pending Requests',
										'requestshistory' => 'Requests History'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	public function requestshistory($area= 'requests', $page = 'requestshistory') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$data['sidenavlinks']  = array(
										'pendingrequests' => 'Pending Requests',
										'requestshistory' => 'Requests History'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	
	public function pendingnewrequest($area= 'requests', $page = 'pendingnewrequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}	
		
	
	public function pendingupdaterequest($area= 'requests', $page = 'pendingupdaterequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}		
	
	
	public function pendinglinkrequest($area= 'requests', $page = 'pendinglinkrequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	
	
	public function newrequesthistoric($area= 'requests', $page = 'newrequesthistoric') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}	
		
	
	public function updaterequesthistoric($area= 'requests', $page = 'updaterequesthistoric') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}		
	
	
	public function linkrequesthistoric($area= 'requests', $page = 'linkrequesthistoric') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}	
	
}