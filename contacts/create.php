<html>
<?php 

include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/header.php'); ?>

<body>
<?php

//////////////////////////////////
$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone_number = $_POST ['phone_number']; 
$email = $_POST['email'];

#Creating a connection
include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/db.php');

$sql = "INSERT INTO `contacts` (`full_name`, `age`, `phone_number`, `email`) VALUES ('$full_name', '$age', '$phone_number', '$email')";
echo $sql."\n";
if ($conn->query($sql) === TRUE) {
	echo "Contact created";
} else {
	echo "contact was not created: " . $sql . "<br>" . $conn->error;
}
//////////////////////////
//Getting the contact_id from the newly created contact
$sql = "SELECT * FROM `contacts` WHERE `full_name`= '$full_name' ORDER BY `id` DESC limit 1" ;

$result = mysqli_query ($conn, $sql) or die ("Bad Query: $sql");
while ($row = mysqli_fetch_assoc ($result))

{
	$contact_id = $row['id'];//Inside a loop you assigned the returned information 
//you are returning $row['id'] and you are assigning it to $contact_id
}

?>

		<br>
			<h3> Here is that record you requested! </h3>
		Full Name: <?php echo $full_name ?>
	<br>
		Age: <?php echo $age ?>
	<br> 
		email: <?php echo $email ?>
	<br>
		Phone Number: <?php echo $phone_number ?>
	</br>
 

<title> Create a Contact </title>

<?php header ("Location:http://localhost/contact_manager/contacts/show.php?contact_id=".$contact_id ); ?> 

</body>
<html>