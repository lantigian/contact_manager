<!DOCTYPE html>
<html lang="en"> <!-- Declared the language of my web page to assit search engines / browsers -->

<!-- including the HEAD portion of the HTML in the header.php file below so that the included contents belonging to the bootstrap can be placed in future pages throughout the projet.  -->
<?php include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/header.php'); ?>

<body>

<button type="button" class="btn btn-outline"> <a href='http://localhost/contact_manager/contacts/new.php' > -add a new contact by clicking here- </a></button>
<!-- created a button within the html tag that is clickable and placed a url of what I wanted to direct the user towards after the button was initiated.-->

<?php
//To obtain all the fields we require an established connection to the database of where we hold such records not directly publicluy available.
include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/db.php');
//The index.php file will go through ALL the contacts, it will display the collected data.

//Query the data, remember "Can you SELECT and return this information for me?""

$sql = "SELECT * FROM `contacts` ORDER BY 'id' " ;
//place the returned data (better yet, lets store that somewhere!)

$result = mysqli_query($conn, $sql) or die ('Bad Query: $sql');
//when the data is collected, we expect to do something with it! so again order is crucial! Generate the table with the desired params in mind, (you can't just go to the grocerries and not have no where to put your obtained goods!) so keep in mind that back end we have variables yes but front end would require a table! the table's main scope is to hold all tasks! so make space in the realm of HTML! (HTML is front end and will display / show).

//note to self order matters! use caution before proceding & placing the returned data to the desired variable! The data with the following information should be seaminlessly on the screen as localhost/contact_manager/contacts is accessed.
echo "<table class=table-hover border='2'>; 
<tr class='active'>
<caption>List of all contacts</caption>
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

//echo prints to the screen (displays), in the above case it generates the string of the specified HTML. Within the PHP enviornment HTML tags are not able to function without placing them within a set of quotattions. 
while ($row = mysqli_fetch_assoc ($result)) 
{

$contact_id = $row ['id'];
$full_name = $row ['full_name'];
$age = $row ['age'];
$phone_number = $row ['phone_number'];
$email = $row ['email'];
// the above is important because like mentioned before the variables hold the returned data from $result. More specifically the $row information of the desired column of a contact. So now we have the variable+desired location that we want to focus our scope towards. We get to specify as well as have a purpose for such data.

echo "<tr>
<td> $contact_id </td>
<td>$full_name </td>
<td>$age</td>
<td>$phone_number</td>
<td>$email</td>
<td>
<button class='btn info'><a href='show.php?contact_id=$contact_id' >show </a> </button>
<button class='btn success'><a href='edit.php?contact_id=$contact_id' >edit </a></button>
<button class='btn danger'><a href='delete.php?contact_id=$contact_id' >delete </a></button>
</td>

</tr>"; 
}
//The purpose of creating buttons was to not only to map the redirecting to each individual toggle but to divide the tasks performed per row (contact). The color cordination was personalized via the bootstrap.   
echo "</table>";
//The previously generated table with the last echo is now utilized by the second echo to place the values from row that was properly placed withinm the specified column variable.

//The table is generated. The table allows for the backend to communicate with the front end and allow for what has been accomplished. By utilizing HTML I was able to bring contact information forward from the database not available to the public eye. The person who executes this code is able to see what the database holds. This allows for viewing as well as modifications as desired.


?> 
<!-- purpose of this page is to pass through all the contacts as well as displaying them within an html table with propr column names and values. Not only does this page shows all contacts within our connected database but it allows us to perform actions such as show, edit, delete or create in terms of a contact and its associated values on every line corresponding to the contact of the same location of where the button originates from. -->

</body>

  <style>

table {
  border-collapse: collapse; /* the outline style we are utilizing */
  width: 100%;
}
th, td {
  text-align: middle; /* Placement of text belonging to the headers of the columns */
  padding: 1px; /* Amount of desired space between each line and the placed text */
}
td{
    text-align: center; /* The text displayed within the rows are now aligned towards the center for a better cleaner look */
}
tr:nth-child(even) {background-color: #C0C0C0;}
}
.btn {
  border: 0px solid black;
  background-color: white;
  color: black;
  padding: 7px 7px;
  font-size: 16px;
  cursor: pointer;
}

/* selected colors / effects for the pages buttons */

/* Green */
.success {
  border-color: #4CAF50;
  color: green;
}
.success:hover {
  background-color: #4CAF50;
  color: white;
}
/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue
}
.info:hover {
  background: #2196F3;
  color: white;
}
/* Orange */
.warning {
  border-color: #ff9800;
  color: orange;
}
.warning:hover {
  background: #ff9800;
  color: white;
}
/* Red */
.danger {
  border-color: #f44336;
  color: red
}
.danger:hover {
  background: #f44336;
  color: white;
}
/* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}
.default:hover {
  background: #e7e7e7;
}
</style>

</html>




