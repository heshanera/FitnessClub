<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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

    // When user submit data on view page, Then this function store data in array.
    public function submitMessage() 
    {
     
        $form_data = $this->input->post();
        
        $mess_id = 0;
        $this->db->select_max('message_id');
        $result = $this->db->get('visitor_message');
        

        if (($result->num_rows) > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $mess_id = $row["message_id"]+1;
            }
        } else {
            $mess_id = 1;
        }
        
        $message = $form_data["message"];
        $email = $form_data["email"];
        $date = date("Y-m-d H:i:s");
        $rd = 0;
        
        // Checking for previous messages //

        $this->db->select("message, message_id");
        $this->db->where('email', $email);
        $result = $this->db->get('visitor_message');

        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $tmp_message =  $row["message"];
                $message_id = $row["message_id"];
            }

            $sql2 = "UPDATE visitor_message SET ".
                    "first_name='".$form_data["first_name"]."',".
                    "last_name='".$form_data["last_name"]."',".
                    "phone='".$form_data["phone"]."',".
                    "message='".$message."',".
                    "date='".$date."' ".
                    "WHERE message_id=".$message_id.";";



            if ($this->db->query($sql2) === TRUE) {
                echo "<h1>".$form_data["first_name"].",<br> Your message successfully submitted!</h1>";
            } else {
                echo "Error updating record: ";
            } 

        } else {

            $sql = "INSERT INTO visitor_message (message_id,first_name,last_name,email,phone,message,date)
                    VALUES ("
                            .$mess_id.",'"
                            .$form_data["first_name"]."','"
                            .$form_data["last_name"]."','"
                            .$email."','"
                            .$form_data["phone"]."','"
                            .$message."','"
                            .$date."');";

            if ($this->db->query($sql) === TRUE) 
            {
                echo "<h1>".$_POST["first_name"].",<br> Your message successfully submitted!</h1>";

            } else {
                echo "Error: " . $sql . "<br>";
            }
        }
        
        
        
        header('Location:'.$this->config->base_url().'contact');
        
    } 

    public function sendMail($email,$message)
    {
        $this->load->library('email');

        $this->email->from('admin@fitness.com', 'Admin');
        $this->email->to($email);
        $this->email->cc('');
        $this->email->bcc('');

        $this->email->subject('Fitness Club');
        $this->email->message($message);

        $this->email->send();
    }        

}        
