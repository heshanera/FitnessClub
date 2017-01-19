<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

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
	// Show form in view page i.e view_page.php
    public function index() 
    {
       
    }
    
    public function showStore()
    {

        $this->load->model('StoreModel','',True);
	$data = $this->StoreModel->getStoreItems();
        
        
        $size = sizeOf($data['item_name']);
        
        /*
        echo $size;
        for ($i = 0; $i < $size; $i++)
        {
            echo $data['item_name'][$i];
            echo ' ';
            echo $data['price'][$i];
            echo ' ';
            echo $data['rating'][$i];
            echo ' ';
            echo $data['stock'][$i];    
            echo '<br>';    
        }
        */
        
    }        
}    