<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class VisitorMessageModel extends CI_Model{
	
        public function __construct()
        {
            parent::__construct();
        }

	public function getMessageFields()
	{
		$this->db->select("first_name,last_name,email,phone,message,date,read,reply");
                $this->db->order_by("date","desc");
		$query = $this->db->get('visitor_message');
		return $query;
	}

	

}

?>
