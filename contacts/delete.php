<?php

$contact_id = $_GET['contact_id'];

include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/db.php');

$sql = "DELETE FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;

echo $sql."\n";
if($conn->query($sql) === true){ 
    echo "Record was deleted successfully."; 
} 
else
{ 
   echo "contact was not created: " . $sql . "<br>" . $conn->error; 
  
}

header ("Location:http://localhost/contact_manager/contacts/new.php?contact_id=".$contact_id );

?>

