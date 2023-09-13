<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vehicle";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if($conn){
  //echo'done';
}else{
  echo'Not done';
}
?>