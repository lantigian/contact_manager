<?php

$contact_id = $_GET['contact_id'];
include ('db.php');



//if(isset(['edit'])

$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

$sql = "UPDATE `contacts` SET `full_name`='$full_name', `age`='$age' ,`phone_number`='$phone_number' , `email`='$email'  WHERE `id` = '$contact_id' limit 1" ;
if($conn->query($sql) === true){ 
    echo "Records was updated successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                        . $conn->error; 
} 
$conn->close();

header ("Location:http://localhost/contact_manager/edit_contact.php?contact_id=".$contact_id );
?>