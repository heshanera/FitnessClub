<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('index');
	}

	public function gallery(){
		$this->load->helper('url');
		$this->load->view('gallery');
	}

	public function store(){
		$this->load->helper('url');
		$this->load->view('store');
	}

	public function schedules(){
		$this->load->helper('url');
		$this->load->view('schedules');
	}

	public function contact(){
		$this->load->helper('url');
		$this->load->view('contact');
	}

	public function about(){
		$this->load->helper('url');
		$this->load->view('about-us');
	}

	public function programs(){
		$this->load->helper('url');
		$this->load->view('programs');
	}

	public function classes(){
		$this->load->helper('url');
		$this->load->view('classes');
	}

	public function login(){
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function registration(){
		$this->load->helper('url');
		$this->load->view('registration');
	}
	
	public function admin(){
		$this->load->helper('url');
		$this->load->view('admin-index');
	}
	
	public function adminCalendar(){
		$this->load->helper('url');
		$this->load->view('admin-basic-calendar');
	}
	
	public function adminGallery(){
		$this->load->helper('url');
		$this->load->view('admin-basic-gallery');
	}
	
	public function adminMessages(){
		$this->load->helper('url');
		$this->load->view('admin-basic-messages');
	}
	
	public function adminProfile(){
		$this->load->helper('url');
		$this->load->view('admin-basic-profile');
	}
	
	public function adminSearch(){
		$this->load->helper('url');
		$this->load->view('admin-basic-search-results');
	}
	
	public function adminChart1(){
		$this->load->helper('url');
		$this->load->view('admin-charts-d3');
	}
	
	public function adminChart2(){
		$this->load->helper('url');
		$this->load->view('admin-charts-flot');
	}
	
	public function adminChart3(){
		$this->load->helper('url');
		$this->load->view('admin-charts-highcharts');
	}
	
	public function adminClients(){
		$this->load->helper('url');
		$this->load->view('admin-sales-stats-clients');
	}
	
	public function adminGeneralSettings(){
		$this->load->helper('url');
		$this->load->view('admin-sales-stats-general-settings');
	}
	
	public function adminProducts(){
		$this->load->helper('url');
		$this->load->view('admin-sales-stats-products');
	}
	
	public function adminPurchases(){
		$this->load->helper('url');
		$this->load->view('admin-sales-stats-purchases');
	}
	
	public function adminDashboard(){
		$this->load->helper('url');
		$this->load->view('admin-dashboard2');
	}
	
	
	
	
	
	
}
