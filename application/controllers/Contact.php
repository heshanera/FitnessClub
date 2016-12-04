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
        
        $servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
        $username = "b5931a4eeccf92";
        $password = "1841dc47";
        $dbname = "fitnessclub";
        
        
        $form_data = $this->input->post();
        $baseUrl = $this->config->base_url();
        header('Location:'.$baseUrl.'contact');
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT message_id FROM web_message WHERE message_id = (SELECT MAX(message_id) FROM web_message);";
        $result = $conn->query($sql);
        $mess_id = 0;

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
        $read = 0;

        // Checking for previous messages //

        $sql = "SELECT message, message_id FROM web_message WHERE email = '".$email."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $tmp_message =  $row["message"];
                $message_id = $row["message_id"];
            }

            $sql2 = "UPDATE web_message SET ".
                    "first_name='".$form_data["first_name"]."',".
                    "last_name='".$form_data["last_name"]."',".
                    "phone='".$form_data["phone"]."',".
                    "message='".$message."',".
                    "date='".$date."'".
                    "read='".$read."'".    
                    "WHERE message_id='".$message_id."'";



            if ($conn->query($sql2) === TRUE) {
                echo "<h1>".$form_data["first_name"].",<br> Your message successfully submitted!</h1>";
            } else {
                echo "Error updating record: " . $conn->error;
            } 

        } else {

            $sql = "INSERT INTO web_message (message_id, name, email,phone,message,date)
                    VALUES ('"
                            .$mess_id."','"
                            .$form_data["first_name"]."','"
                            .$form_data["last_name"]."','"
                            .$email."','"
                            .$form_data["phone"]."','"
                            .$message."','"
                            .$date
                            ."')";

            if ($conn->query($sql) === TRUE) 
            {
                //echo "<h1>".$_POST["name"].",<br> Your message successfully submitted!</h1>";

            } else {
                //echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        
        $conn->close();
        
        
        /*
        echo $form_data.'<br>';
        echo sizeof($form_data).'<br>';
        
        
        echo $form_data['first_name'].'<br>';
        echo $form_data['last_name'].'<br>';
        echo $form_data['email'].'<br>';
        echo $form_data['phone'].'<br>';
        echo $form_data['message'].'<br>';
         
        
        
        echo $form_data['security_code'].'<br>';
        */
        /*
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT message_id FROM web_message WHERE message_id = (SELECT MAX(message_id) FROM web_message);";
        $result = $conn->query($sql);
        $mess_id = 0;

        if (($result->num_rows) > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $mess_id = $row["message_id"]+1;
            }
        } else {
            $mess_id = 1;
        }

        $message = $_POST["message"];
        $email = $_POST["email"];
        $date = date("Y-m-d H:i:s");
        $read = 0;

        if ( ($email != NULL) and ($message != NULL))
        {

            // Checking for previous messages //

            $sql = "SELECT message, message_id FROM web_message WHERE email = '".$email."'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $tmp_message =  $row["message"];
                    $message_id = $row["message_id"];
                }

                $sql2 = "UPDATE web_message SET ".
                        "first_name='".$_POST["first_name"]."',".
                        "last_name='".$_POST["last_name"]."',".
                        "phone='".$_POST["phone"]."',".
                        "message='".$message."',".
                        "date='".$date."'".
                        "read='".$read."'".    
                        "WHERE message_id='".$message_id."'";



                if ($conn->query($sql2) === TRUE) {
                    echo "<h1>".$_POST["first_name"].",<br> Your message successfully submitted!</h1>";
                } else {
                    echo "Error updating record: " . $conn->error;
                } 

            } else {

                $sql = "INSERT INTO web_message (message_id, name, email,phone,message,date)
                        VALUES ('"
                                .$mess_id."','"
                                .$_POST["first_name"]."','"
                                .$_POST["last_name"]."','"
                                .$email."','"
                                .$_POST["phone"]."','"
                                .$message."','"
                                .$date
                                ."')";

                if ($conn->query($sql) === TRUE) 
                {
                    //echo "<h1>".$_POST["name"].",<br> Your message successfully submitted!</h1>";

                } else {
                    //echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        } else {

            //header("Location: contactForm.html");
            //echo "<h1>PLEASE FILL A VALID EMAIL AND THE MESSAGE!</h1>";

        }
        $conn->close(); 
         * 
         */
        
    }     
}        
