<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class StoreModel extends CI_Model{
	
        public function __construct()
        {
            parent::__construct();
        }

        
        public function getStoreItems()
        {
            $this->db->select("item_type_name,price,rating,current_stock,image");
            $query = $this->db->get('store');
            
            $i = 0;
            foreach($query->result_array() AS $row) 
            {
                    $item_name[$i] = $row['item_type_name'];
                    $price[$i] = $row['price'];
                    $rating[$i] = $row['rating'];
                    $stock[$i] = $row['current_stock'];
                    $image[$i] = $row['image'];
                    
                    $i++;
            }
            $data['item_name'] = $item_name;
            $data['price'] = $price;
            $data['rating'] = $rating;
            $data['stock'] = $stock;     
            $data['image'] = $image;     
            
            
            
            return $data;
        }        
        
	

}

?>

