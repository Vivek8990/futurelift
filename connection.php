<?php
  
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "responsive";

// Create connection
try{
$db = new mysqli($servername, $username, $password,$db);
$error ="";

}
catch(Exception $e){
    echo $e;
}
// Check connection
if ($db->connect_error) {
   
    die("Connection failed: " . $conn->connect_error);
}
?>
