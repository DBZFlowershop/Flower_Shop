<?php
$servername = "localhost:3306";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error){
	die("Connection failed: " + $conn->connect_error);
}
?>

