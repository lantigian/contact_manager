<?php

$full_name = $_GET['full_name'];
$age = $_GET['age'];
$phone_number = $_GET ['phone_number']; 
$email = $_GET['email'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_manager';

#Creating a connection

$conn = new mysqli ($servername, $username, $password, $dbname);
#Checking connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO `contacts` (`full_name`, `age`, `phone_number`, `email`) VALUES ('$full_name', '$age', '$phone_number', '$email')";
echo $sql."\n";
if ($conn->query($sql) === TRUE) {
	echo "Contact created";
} else {
	echo "contact was not created: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>