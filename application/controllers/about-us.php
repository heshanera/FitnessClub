<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class aboutUs extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('about-us');
	}

}
