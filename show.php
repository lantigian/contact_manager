<?php 

$contact_id = $_GET['contact_id'];


include ("db.php");


$sql = "SELECT * FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;

$result = mysqli_query($conn, $sql) or die ("Bad Query: $sql");

while ($row = mysqli_fetch_assoc ($result)) 

{


	$full_name = $row['full_name'];

	$age = $row['age'];

	$phone_number = $row['phone_number'];
	
	$email = $row['email'];

}

$conn->close();

?>
<html>
<head>
 <style>
         .button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         }
      </style>
	</head>
	<body>

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

     
  
  
      <a href="http://localhost/contact_manager/new_contact.php" class="button">Create a contact here: </a>

<a href="http://localhost/contact_manager/show_contact.php?contact_id=" class="button">Create a contact here: </a>


</body>
<html>






