<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "asd@123";
$dbname = "users";
 



$conn = new mysqli($servername, $username, $password, $dbname);
    
  if ($conn->connect_error) 
   {
     die("Connection failed: " . $conn->connect_error);
   }


$about = $_POST['about'];
$email = $_SESSION["email"];

$sql = "INSERT INTO sample(about) WHERE (email = '$email') VALUES ($about)";  




?>
