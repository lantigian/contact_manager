<?php

$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone_number = $_POST ['phone_number']; 
$email = $_POST['email'];
$contact_id = $_POST['contact_id'];



#Creating a connection
include ("db.php");


$sql = "INSERT INTO `contacts` (`full_name`, `age`, `phone_number`, `email`) VALUES ('$full_name', '$age', '$phone_number', '$email')";
echo $sql."\n";
if ($conn->query($sql) === TRUE) {
	echo "Contact created";
} else {
	echo "contact was not created: " . $sql . "<br>" . $conn->error;
}
//////////////////////////
$sql = "SELECT * FROM `contacts` WHERE `full_name`= '$full_name' ORDER BY `id` DESC limit 1" ;

$result = mysqli_query ($conn, $sql) or die ("Bad Query: $sql");
while ($show = mysqli_fetch_assoc ($result))

{
	$contact_id = $show['id'];

}

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

<?php /// create a buttom that would take/route you to the newly created contact show page ?> 
<a href="http://localhost/contact_manager/show_contact.php?contact_id=<?php echo $contact_id; ?>" class="button"> Here is your newly created contact: </a>



</body>
<html>
