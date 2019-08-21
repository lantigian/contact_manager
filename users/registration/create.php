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


$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
$passresult = $hashedPwd
$pass = $passresult 
$sql = "INSERT INTO `users` (`first_name`,`last_name`,`email`,`password`) VALUES ( '$first_name' , '$last_name' , '$email' , '$pass')";

mysqli_query($conn, $sql); 
header ("Location: http://localhost/contact_manager/users/session/new.php?sign_up=success");
exit();
?>
</body>