<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class VisitorMessageModel extends CI_Model{
	
        public function __construct()
        {
            parent::__construct();
        }

	public function getMessageFields()
	{
		$this->db->select("first_name,last_name,email,phone,message,date,rd,reply");
                $this->db->order_by("date","desc");
		$query = $this->db->get('visitor_message');
                
                $i = 0;
		
		foreach($query->result_array() AS $row) 
		{
    			$first_name[$i] = $row['first_name'];
			$last_name[$i] = $row['last_name'];
			$email[$i] = $row['email'];
                        $phone[$i] = $row['phone'];
                        $message[$i] = $row['message'];
                        $date[$i] = $row['date'];
                        $read[$i] = $row['read'];
                        $reply[$i] = $row['reply'];
                        
			$i++;
		}
		$data['first_name'] = $first_name;
		$data['last_name'] = $last_name;
		$data['email'] = $email;
		$data['phone'] = $phone;
                $data['message'] = $message;
                $data['date'] = $date;
                $data['read'] = $read;
                $data['reply'] = $reply;
                
		return $data;
	}

	

}

?>
