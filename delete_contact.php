<?php

$contact_id = $_GET['contact_id'];

include('db.php');

header ('Location:http://localhost/contact_manager/new_contact.php');


$sql = "SELECT * FROM `contacts` WHERE `id`= '$contact_id' ORDER BY `id` DESC limit 1";

$result = mysqli_query ($conn, $sql) or die ("Bad Query: $sql");
while ($show = mysqli_fetch_assoc ($result)) 

{

   $contact_id = $show['id'];
   $full_name = $show['full_name'];

	$age = $show['age'];

	$phone_number = $show['phone_number'];
	
	$email = $show['email'];
}


$sql = "DELETE FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;

echo $sql."\n";
if($conn->query($sql) === true){ 
    echo "Record was deleted successfully."; 
} 
else
{ 
   echo "contact was not created: " . $sql . "<br>" . $conn->error; 
  
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="http://localhost/contact_manager/show_contact.php?contact_id=<?php echo $conact_id; ?>" class="button"> Here is your newly created contact: </a>

<br>
			<h3> Here is that record you deleted </h3>
		Full Name: <?php echo $full_name ?>
	<br>
		Age: <?php echo $age ?>
	<br> 
		email: <?php echo $email ?>
	<br>
		Phone Number: <?php echo $phone_number ?>
	</br>

</body>
</html>