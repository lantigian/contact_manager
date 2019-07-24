<!DOCTYPE html>
<html lang="en">
<!-- including the HEAD of the HTML via the header.php file bellow so that the bootstrap portion can be placed in future pages down the line.  -->
<?php include ('header.php'); ?>

<body>
<button type="button" class="btn btn-outline-primary"> <a href='http://localhost/contact_manager/new.php' > -add a new contact by clicking here- </a></button>

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
echo "<table class=table-striped>
<tr class='active'>
<thead>
<tr>
<th> id </th>
<th>Full Name </th>
<th>Age </th>
<th>Phone Number </th>
<th>Email </th>
<th>Actions </th>
</tr>
</thead>"; 

while ($row = mysqli_fetch_assoc ($result)) 
{
$contact_id = $row ['id'];
$full_name = $row ['full_name'];
$age = $row ['age'];
$phone_number = $row ['phone_number'];
$email = $row ['email'];
// the above is important because like mentioned before the variables hold the returned data from $result. More specifically the $row information of the 
//desired column of a contact. So now we have the variable+desired location that we want to focus our scope towards. We get to specify as well as have a purpose for such data point.

echo "<tr>
<td> $contact_id </td>
<td>$full_name </td>
<td>$age</td>
<td>$phone_number</td>
<td>$email</td>
<td><button class='btn btn-outline-primary'><a href='show.php?contact_id=$contact_id' >show </a> </button>
<button class='btn btn-outline-primary'><a href='edit.php?contact_id=$contact_id' >edit </a></button>
<button class='btn btn-outline-primary'><a href='delete.php?contact_id=$contact_id' >delete </a></button>
</tr>"; 
}
echo "</table>";

//The table is generated. The table allows for the backend to communicate with the front end and allow for what has been accomplished. By utilizing HTML I was able to bring contact information forward from the database not available to the public eye. The person who executes this code is able to see what the database holds. This allows for viewing as well as modifications as desired.


?> 


</body>

</html>




