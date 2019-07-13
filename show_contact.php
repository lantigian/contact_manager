<?php 

//$full_name = $_GET['full_name'];
$contact_id = $_GET['contact_id'];


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_manager';



// print_r($_GET);
//if($_GET['full_name'] === '') echo "you did not make a request to the server\n"

//Hey contact_manager can you return for me a contact from contacts where full_name equals  $_GET['full_name']

//$sql = "SELECT * FROM `contacts` WHERE `full_name`= '$full_name' limit 1" ;

$conn = new mysqli ($servername, $username, $password, $dbname);
#Checking connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
echo "Connected succesfully";

///<a href = "http://localhost/contact_manager/create_contact.php"> Create Contact </a>

///include ("create_contact.php");


$sql = "SELECT * FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;

$result = mysqli_query($conn, $sql) or die ("Bad Query: $sql");
//$result = $conn->query($sql);

//while($row = $result->fetch_assoc())
while ($row = mysqli_fetch_assoc ($result)) 

{
 

///set all the values
	//print_r ($row);

	$full_name = $row['full_name'];

	$age = $row['age'];

	$phone_number = $row['phone_number'];
	
	$email = $row['email'];

///echo $_GET ['http://localhost/contact_manager/new_contact.php'];

}
//exsecute data from query and retrieve the information and assign the data

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







