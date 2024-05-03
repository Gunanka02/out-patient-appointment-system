<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "localhost";
$username = "root";
$password = "";
$database="hackdatabase";    

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);


if (!$conn) {
  die("connection to this database failed due to" . mysqli_connect_error());
}
else{ 
        // echo "success";      
        $name = $_REQUEST['name'];
        $address=$_REQUEST['address'] ;
        $gender=$_REQUEST['gender'] ;
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];

      
            $sql = "INSERT INTO `signup` (`name`, `address`, `gender`, `email`, `contact`,`datetime`) VALUES ('$name', '$address', '$gender', '$email', '$contact',current_timestamp() );";

            $result=mysqli_query($conn,$sql);

            $_SESSION['status']=true;            
        }
        
    }
    header( "Location: appointment.php" );

?>
