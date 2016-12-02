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

	public function submitgalleryitem(){
		$this->load->helper('url');
		function diewithhonour($s = 0){
			echo 'error'.$s;
			die("");
		}
		$conn = null;
		try{
			$conn = mysqli_connect("localhost","root","mysqler","fitnessclub");
		}catch (mysqli_sql_exception $e){
			diewithhonour();
		}

		if ($conn == null) {
			diewithhonour();
		}
		$title = null;
		$desc = null;
//value validation
		if (isset($_POST['title']) == false || $_POST['title']==""){
			diewithhonour();
		}else{
			$title = mysqli_escape_string($conn,$_POST['title']);
		}

		if (isset($_POST['description']) == false || $_POST['description']==""){
			diewithhonour();
		}else{
			$desc = mysqli_escape_string($conn,$_POST['description']);
		}

		if ($title == null or $desc == null){
			diewithhonour();
		}

//upload
		$target_dir = "assets/img/gallery/";
		$target_file = md5(($_FILES["fileToUpload"]["name"]))."_".md5(date('Y-m-d h:i:sa')).".jpg";
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
			} else {
				diewithhonour("valid");
				$uploadOk = 0;
			}

			if ($_FILES["fileToUpload"]["size"] > 500000) {
				diewithhonour("size");
				$uploadOk = 0;
			}

			if($imageFileType != "jpg") {
				diewithhonour("notjpeg");
				$uploadOk = 0;
			}
		}
		echo $target_file;

		if ($uploadOk == 0) {
			diewithhonour();
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$target_file)) {
				$uploadOk = 1;
			} else {
				diewithhonour("upload");
				$uploadOk = 2;
			}
		}

		$publish = 0;
		if (isset($_POST['publish'])){
			$publish = 1;
		}



		$sql = "INSERT INTO gallery_items (title, description, publish,image) VALUES ('$title', '$desc', $publish,'$target_file')";

		if ($conn->query($sql) === TRUE && $uploadOk==1) {
			echo "ok";
		} else {
			if ($uploadOk != 1){
				diewithhonour(3);
			}else {
				diewithhonour(4);

			}
		}
	}
	
	
	
	
	
	
}
