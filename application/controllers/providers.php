<?php

	class Providers extends CI_Controller {
			
	public function index( $area = 'providers', $page = 'providers') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		$data['_view_provider_modal'] = $this->load->view('pages/shared/_view_provider_modal.php', true);
		$data['page'] = $page;
		$data['area'] = $area;
		$data['mainlinks'] = array(
									'home' => 'Home',
									'providers' => 'Find Services',
									'info' => 'Help & Info',
									'carerecord'  => 'My Care Record',
									'provideradmin'  => 'Provider Admin'
									);
									
		$this->load->helper('url');
		$data['_shareserviceinfo_modal'] = $this->load->view('pages/shared/_shareserviceinfo_modal.php', $data, true);
		$data['_needsassessment_wizard'] = $this->load->view('pages/shared/_needsassessment_wizard.php', $data, true);
		$data['_sendmessage_modal'] = $this->load->view('pages/shared/_sendmessage_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	
	public function needsassessment(){
		$this->index();
	}
	public function searchresults(){
		$this->index();
	}
}

