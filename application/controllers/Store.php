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
        
    }   
    
    public function addNewProduct()
    {
        $form_data = $this->input->post();
        
        $item_id = 1;
        $this->db->select_max('item_id');
        $result = $this->db->get('store');
        
        if (($result->num_rows) > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $item_id = $row["item_id"]+1;
            }
        }
        
        $rating = 4;
        
        $sql = "INSERT INTO store (item_type_name,item_type_description,image,price,rating,current_stock) VALUES ('"
                .$form_data["name"]."','"
                .$form_data["comment"]."','"
                .$form_data["image"]."',"
                .$form_data["price"].","
                .$rating.","
                .$form_data["quantity"]
                .")";
                
        $this->db->query($sql);
        
        header('Location:'.$this->config->base_url().'admin-add-to-store');
        
    }        
    
    
    public function deleteProduct($i)
    {
        $this->load->model('StoreModel','',True);
	$result = $this->StoreModel->deleteStoreItems($i);
        
        if ($result == 1) {
            
            header('Location:'.$this->config->base_url().'admin-add-to-store');
            
        } 
        
    }        
    
    public function showDetails($i) 
    {
        $this->load->model('StoreModel','',True);
	$data = $this->StoreModel->getStoreItemsDetails($i+1);
        
        $this->load->helper('url');
	$this->load->view('storeProduct',$data);
        
    }
    
    public function filterProducts($i)
    {
        // 1 - active products
        // 2 - low stock products
        // 3 - sold out products
        
        
        if ( $i == 1 ) {
            
            $data = getActiveItemsDetails();
            $this->load->helper('url');
	    $this->load->view('admin-add-to-store',$data);
            
        }
        
    }        
    
    
    
}    