<?php
//utilizing a header that includes the HTML portion which has the bootstrap 
include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/header.php'); ?>

<?php
//
session_start();
if (! empty($_POST) ) {
	if (isset($_POST['email']) && isset ($_POST['password'])) {
		include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/db.php');
		$stmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = ?");
		$stmt ->bind_param('s', $_POST['email']);
		$stmt-> execute();
		$result = $stmt->get_result();
		$user = $result->fetch_object();

		if (password_verify($_POST['password'], $user->password)) {
			$_SESSION['id'] = $user->ID;
		}
	}
} 
	header ("Location: http://localhost/contact_manager/contacts/index.php?sign_in=success"); 

?>