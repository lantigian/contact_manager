<html>

<?php include ('header.php'); ?>

<body>
<?php

$contact_id = $_GET['contact_id'];

include ('Applications/XAMPP/xamppfiles/htdocs/contact_manager/db.php');

$sql = "SELECT * FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;
$result = mysqli_query($conn, $sql) or die ('Bad Query: $sql');
while ($row = mysqli_fetch_assoc ($result)) 
{
$full_name = $row['full_name'];
$age = $row['age'];
$phone_number = $row['phone_number'];
$email = $row['email'];
}
?> 

<h1> Edit Contact </h1>
<form action= "update.php?contact_id=<?php echo $contact_id; ?>" method = "POST">
    full_name: <br>
    <input type = 'text' name="full_name" value="<?php echo $full_name; ?>" ><br>
    age: <br>
    <input type = 'text' name="age" value="<?php echo $age; ?>" ><br>
    phone_number: <br>
    <input type='text' name='phone_number' value="<?php echo $phone_number; ?>" ><br>
    email: <br>
    <input type='text' name='email' value="<?php echo $email; ?>"  ><br>

<input type = "submit" name="edit" value='edit'>
</form>
<style>
	input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}</style>
</body>
</html>
