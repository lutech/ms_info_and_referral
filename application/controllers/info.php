<?php

	class Info extends CI_Controller {
			
	public function index($page = 'programsandservices') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		//PROVIDER ACCESS
		//---------------------------------------
		if (isset($_COOKIE['user'])){
			
			//UNATUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'unauthorizedprovider'){			
				$this->programsandservices();		
			}
			//ATUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider') {			
				$this->programsandservices();		
			}
			//MS STAFF ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {			
				$this->programsandservices();		
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){			
				$this->programsandservices();		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){			
				$this->programsandservices();		
			}
			//DOM ADMIN ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'domstaff'){			
				$this->programsandservices();		
			}
		}
		//PUBLIC VISITOR ACCESS
		//---------------------------------------
		else {			
			$this->programsandservices();
		}
		
	}
	
	
	public function programsandservices( $area = 'info', $page = 'programsandservices') {
		
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
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//MS STAFF MEMBER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us',
											//'provideraccess' => 'MS Staff Access'
											);		
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
			//DOM ADMIN ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'domstaff'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
		} else {
			$data['sidenavlinks']  = array(
										'programsandservices' => 'Programs and Services',
										'training' => 'Training Resources',
										'faq' => 'FAQ',
										'contactus' => 'Contact Us'
										);
		}
		
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->helper('url');
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	
	public function faq( $area = 'info',$page = 'faq') {
		
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
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//MS STAFF MEMBER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us',
											//'provideraccess' => 'MS Staff Access'
											);		
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
			//DOM ADMIN ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'domstaff'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
		} else {
			$data['sidenavlinks']  = array(
										'programsandservices' => 'Programs and Services',
										'training' => 'Training Resources',
										'faq' => 'FAQ',
										'contactus' => 'Contact Us'
										);
		}
		
		$data['page'] = $page;
		$data['area'] = $area;		
		$this->load->helper('url');
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	public function training( $area = 'info', $page = 'training') {
		
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
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//MS STAFF MEMBER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us',
											//'provideraccess' => 'MS Staff Access'
											);		
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
			//DOM ADMIN ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'domstaff'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
		} else {
			$data['sidenavlinks']  = array(
										'programsandservices' => 'Programs and Services',
										'training' => 'Training Resources',
										'faq' => 'FAQ',
										'contactus' => 'Contact Us'
										);
		}
		
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->helper('url');
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	public function contactus( $area = 'info', $page = 'contactus') {
		
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
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//MS STAFF MEMBER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us',
											//'provideraccess' => 'MS Staff Access'
											);		
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
			//DOM ADMIN ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'domstaff'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
		} else {
			$data['sidenavlinks']  = array(
										'programsandservices' => 'Programs and Services',
										'training' => 'Training Resources',
										'faq' => 'FAQ',
										'contactus' => 'Contact Us'
										);
		}
		
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->helper('url');
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_sendmessage_modal'] = $this->load->view('pages/shared/_sendmessage_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	
	public function provideraccess( $area = 'info', $page = 'provideraccess') {
		
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
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'authorizedprovider'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);	
			}
			//MS STAFF MEMBER ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us',
											//'provideraccess' => 'MS Staff Access'
											);		
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
			//DOM ADMIN ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'domstaff'){
				$data['sidenavlinks']  = array(
											'programsandservices' => 'Programs and Services',
											'training' => 'Training Resources',
											'faq' => 'FAQ',
											'contactus' => 'Contact Us'
											);
			}
		} else {
			$data['sidenavlinks']  = array(
										'programsandservices' => 'Programs and Services',
										'training' => 'Training Resources',
										'faq' => 'FAQ',
										'contactus' => 'Contact Us'
										);
		}
		
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->helper('url');
		$data['_sidenavigation'] = $this->load->view('pages/shared/_sidenavigation.php', $data, true);
		$data['_create_provideraccount_modal'] = $this->load->view('pages/shared/_create_provideraccount_modal.php', $data, true);
		$this->load->view("templates/master-layout.php", $data);
	}
	
}