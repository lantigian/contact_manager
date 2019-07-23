<?php

$contact_id = $_GET['contact_id'];

include('db.php');

$sql = "DELETE FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;

echo $sql."\n";
if($conn->query($sql) === true){ 
    echo "Record was deleted successfully."; 
} 
else
{ 
   echo "contact was not created: " . $sql . "<br>" . $conn->error; 
  
}

header ("Location:http://localhost/contact_manager/new_contact.php?contact_id=".$contact_id );

?>

