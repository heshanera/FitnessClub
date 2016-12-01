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
}
