<?php
//Where we will obtaining all the fields we require will come from an established connection to the database of where we hold such records not publicluy available.
include ('db.php');
//The index.php file will go through ALL the contacts, it will display the collected data.
//Query the data, remember "Can you SELECT and return this information for me?""
$sql = "SELECT * FROM `contacts` ORDER BY 'id' " ;
//place the returned data (better yet lets store that somewhere!)
$result = mysqli_query($conn, $sql) or die ('Bad Query: $sql');
//when the data is collected, we expect to do something with it! so again order is crucial! Generate the table with the desired params in mind, (you can't just go to the grocerries and not have no where to put your obtained goods!) so keep in mind that back end we have variables yes but front end would require a table! the table's main scope is to hold all tasks! so make space in the realm of HTML! (HTML is front end and will display / show).

//note to self order matters! use caution before proceding & placing the returned data to the desired variable! The data with the following information should be seaminlessly on the screen as localhost/contact_manager/ is accessed.
echo "<table class='table'>";
echo "<tr><td> id </td><td> Full Name </td><td> Age </td><td> Phone Number </td><td> email </td><td> actions </td></tr>\n"; 

while ($row = mysqli_fetch_assoc ($result)) 
{
$contact_id = $row ['id'];
$full_name = $row ['full_name'];
$age = $row ['age'];
$phone_number = $row ['phone_number'];
$email = $row ['email'];

echo "<tr><td>{$row['id']} </td><td>{$row['full_name']} </td><td>{$row['age']}</td><td>{$row['phone_number']}</td><td>{$row['email']}</td><td> <a href='show.php?contact_id=$contact_id' >show </a> </td><td> <a href='edit.php?contact_id=$contact_id' >edit__ </a> </td><td> <a href='delete.php?contact_id=$contact_id' >delete </a> </td></tr>"; 
}
echo "<table>";

//if header ("Location:http://localhost/contact_manager/new.php?contact_id=".$contact_id ); ?> 






<!DOCTYPE HTML>

<html>
<body>

<a href="http://localhost/contact_manager/new.php" class="button"> -------------------------------------------create new-------------------------------------------- </a>


</body>
</html> 



