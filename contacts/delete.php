<?php
session_start();

?>

<hhead>
<?php 


include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/header.php');
 ?>

</head>

<body><
<?php
if (!isset($_POST['email']) && !isset ($_POST['password'])) {
   header("Location: http://localhost/contact_manager/users/session/new.php?log_in_reqired");
} else {

include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/db.php');

$contact_id = $_GET['contact_id'];

$sql = "DELETE FROM `contacts` WHERE `id`= '$contact_id' limit 1" ;

echo $sql."\n";
if($conn->query($sql) === true){ 
    echo "Record was deleted successfully."; 
} 
else
{ 
   echo "contact was not created: " . $sql . "<br>" . $conn->error; 
  
}
}

header ("Location:http://localhost/contact_manager/contacts/new.php?contact_id=".$contact_id );

?>
</body>