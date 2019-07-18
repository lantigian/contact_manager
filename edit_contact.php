<?php

$contact_id = $_GET['contact_id'];
$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone_number = $_POST ['phone_number']; 
$email = $_POST['email'];

include ('db.php');

    $sql = "SELECT * FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;

     $result = mysqli_query($conn, $sql) or die ('Bad Query: $sql');
     while ($row = mysqli_fetch_assoc ($result)) 

{

$full_name = $row['full_name'];

    $age = $row['age'];

    $phone_number = $row['phone_number'];
    
    $email = $row['email'];

}

if( isset($_POST['edit']))

{

$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone_number = $_POST ['phone_number']; 
$email = $_POST['email'];

 $sql = "UPDATE `contacts` SET `full_name`='$full_name', `age`='$age' ,`phone_number`='$phone_number' , `email`='$email'  WHERE `id` = '$contact_id' " ;

if($conn->query($sql) === true){ 
    echo "Records was updated successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                        . $conn->error; 
} 
$conn->close();
}

?>

<!DOCTYPE HTML>

<html>
<body>

<title> Assignment Zero </title>
<h1> Edit Contact </h1>
<form action= "edit_contact.php?contact_id=<?php echo $contact_id; ?>" method = "POST">
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

</body>
</html>