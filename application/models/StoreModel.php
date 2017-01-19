<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class StoreModel extends CI_Model{
	
        public function __construct()
        {
            parent::__construct();
        }

        
        public function getStoreItems()
        {
            $this->db->select("item_type_name,price,rating,current_stock,image,item_id");
            $query = $this->db->get('store');
            
            $i = 0;
            foreach($query->result_array() AS $row) 
            {
                    $item_name[$i] = $row['item_type_name'];
                    $price[$i] = $row['price'];
                    $rating[$i] = $row['rating'];
                    $stock[$i] = $row['current_stock'];
                    $image[$i] = $row['image'];
                    $item_id[$i] = $row['item_id'];
                    
                    $i++;
            }
            $data['item_name'] = $item_name;
            $data['price'] = $price;
            $data['rating'] = $rating;
            $data['stock'] = $stock;     
            $data['image'] = $image; 
            $data['item_id'] = $item_id;
            
            
            
            return $data;
        }        
        
        public function getStoreItemsDetails($i)
        {
            
            $this->db->select("item_type_name,price,rating,current_stock,image,item_type_description");
            $this->db->where("item_id",$i);
            $query = $this->db->get('store');

            $i = 0;
            foreach($query->result_array() AS $row) 
            {
                    $item_name[$i] = $row['item_type_name'];
                    $price[$i] = $row['price'];
                    $rating[$i] = $row['rating'];
                    $stock[$i] = $row['current_stock'];
                    $image[$i] = $row['image'];
                    $desc[$i] = $row['item_type_description']; 
                    
                    $i++;
            }
            $data['item_name'] = $item_name;
            $data['price'] = $price;
            $data['rating'] = $rating;
            $data['stock'] = $stock;     
            $data['image'] = $image;     
            $data['discription'] = $desc;     
            
            
            
            return $data;
        }   
        
        public function getActiveItemsDetails($i)
        {
            
            $this->db->select("item_type_name,price,rating,current_stock,image,item_type_description");
            $this->db->where("item_id",$i);
            $this->db->where("current_stock > 5");
            $query = $this->db->get('store');

            $i = 0;
            foreach($query->result_array() AS $row) 
            {
                    $item_name[$i] = $row['item_type_name'];
                    $price[$i] = $row['price'];
                    $rating[$i] = $row['rating'];
                    $stock[$i] = $row['current_stock'];
                    $image[$i] = $row['image'];
                    $desc[$i] = $row['item_type_description']; 
                    
                    $i++;
            }
            $data['item_name'] = $item_name;
            $data['price'] = $price;
            $data['rating'] = $rating;
            $data['stock'] = $stock;     
            $data['image'] = $image;     
            $data['discription'] = $desc;     
            
            
            
            return $data;
        }   
        
	
        public function deleteStoreItems($i)
        {
            
            $sql = "DELETE FROM store WHERE item_id=$i";
            $query = $this->db->query($sql);
            return $query;
            
        } 
        
        
}

?>

