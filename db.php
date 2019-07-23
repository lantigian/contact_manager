<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_manager';

$conn = new mysqli ($servername, $username, $password, $dbname);
#Checking connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
