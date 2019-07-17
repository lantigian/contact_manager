<?php 


$contact_id = $_GET['contact_id'];
//////////////////////////////////////////////////////////////////
$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone_number = $_POST ['phone_number']; 
$email = $_POST['email'];
/////////////////////////////////////////////////////////////////

include ("db.php");


$sql = "UPDATE `contacts` SET `full_name`='$full_name', `age`='$age' ,`phone_number`='$phone_number' , `email`='$email'  WHERE `id` = '$contact_id' ";


if ($conn->query($sql) === TRUE) 
{
    echo "Record updated successfully";
} else 

{
    echo "Error updating record: " . $conn->error;
}



?>
<!DOCTYPE HTML>

<html>
<body>



<title> Assignment Zero </title>
<h1> Edit Contact </h1>
<form action= "edit_contact.php?contact_id=<?php echo $contact_id; ?>" method = "POST">
	full_name: <br>
	<input type = 'name' name='full_name' placeholder="Mickey Rat"><br>
	age: <br>
	<input type = "name" name='age' placeholder="18"><br>
	phone_number: <br>
	<input type="name" name='phone_number' placeholder="xxx-xxx-xxxx"><br>
	email: <br>
	<input type="name" name="email" placeholder= 'neal4@gmail.com' ><br>

<input type = "submit" name='edit' value="'submit">
</form>
<!--  hey im a comment  --->
<?php
/////////The action of a form is a URL
?>

</body>
</html> 





