<?php
require_once '../DatabaseLogin.php';

//Create connection
$conn = new mysqli($servername, $username, $password);
//Check connection
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error );
}

//Create database
$sql = "CREATE DATABASE Dodam";
if($conn ->query($sql) === TRUE){
  echo "Database created sucessfully";
} else{
  echo "Error creating database: " . $conn->error;
}

$conn->close();

 ?>
