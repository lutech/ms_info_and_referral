<?php

	class Submissions extends CI_Controller {
			
	public function index($page = 'pendingsubmissions') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		$this->pendingsubmissions();
	}
	
		
	public function pendingsubmissions($area= 'submissions', $page = 'pendingsubmissions') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$data['sidenavlinks']  = array(
										'pendingsubmissions' => 'Pending Submissions',
										'submissionshistory' => 'Submissions History'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	public function submissionshistory($area= 'submissions', $page = 'submissionshistory') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$data['sidenavlinks']  = array(
										'pendingsubmissions' => 'Pending Submissions',
										'submissionshistory' => 'Submission History'
										);
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	
	public function newrequest($area= 'submissions', $page = 'newrequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}	
		
	
	public function updaterequest($area= 'submissions', $page = 'updaterequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}		
	
	
	public function linkrequest($area= 'submissions', $page = 'linkrequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}	
	
	
	
	public function historicnewrequest($area= 'submissions', $page = 'historicnewrequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}	
		
	
	public function historicupdaterequest($area= 'submissions', $page = 'historicupdaterequest') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		
		$this->load->helper('url');
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->view("templates/master-layout.php", $data);
	}		
	
	
	public function historiclinkrequest($area= 'submissions', $page = 'historiclinkrequest') {
		
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