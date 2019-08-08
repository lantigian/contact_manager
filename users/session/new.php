<!DOCTYPE html>
<html>

<?php
//sign_in

include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/header.php');
 ?>
<title> Sign in </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id="frm">
<h2> Signing in<h2>
<form action= "create.php" method = "POST">
	<p>
	<div class="form-group">
		<label> 

			<b>first_name:</b>
		</label>
		<input type = 'text' name='full_name' placeholder="Ian">
	</p>
	</div>

<p>
		<div class="form-group">
		<label> 
			<b>last_name:<a>
		</label>
		<input type = 'text' name='last_name' placeholder="Lantigua">
	</div>
</p>
<p>	
	<div class="form-group">
		<label> 
			<b>email:<b>
			</label>
		<input type="text" name='email' placeholder="apple@tree.com">
	</div>
</p>
<p>	
	<div class="form-group">
		<label>
			<b>password:<a> 
			</label>
		<input type="text" name='password' placeholder= '****************************' >
	</div>
</p>
<input type = 'submit' id='btn' value="sign in">
</form>

</body>
</html> 
