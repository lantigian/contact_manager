<html>
<?php 
//sign_up
include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/header.php'); ?>
<title> user sign_up </title>
<body>
<?php

#Creating a connection
include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/db.php');

$first_name = mysqli_real_escape_string ($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string ($conn, $_POST['last_name']);
$email = mysqli_real_escape_string ($conn, $_POST['email']); 
$pass = mysqli_real_escape_string ($conn, $_POST['password']);


$sql = "INSERT INTO `users` (`first_name`,`last_name`,`email`,`password`) VALUES ( ? , ? , ?, ?)";


$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare ($stmt, $sql)) {
	echo "SQL error";
} else {
	mysqli_stmt_bind_param ($stmt, "ssss", $first_name, $last_name, $email, $pass);
	mysqli_stmt_execute($stmt);
}

header ("Location: http://localhost/contact_manager/users/session/new.php?sign_up=success");
?>
</body>
