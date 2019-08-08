<!DOCTYPE html>
<!-- Purpose of this form is to allow desired user credentials to be collected and placed within the database to later be utilized to compare/authenticate when signing the user in after a succesful resgistration. --> 
<html>

<?php
//sign_up
//bootstrap 4.3.1 file to be included throughout the project for css/js.
include ('/Applications/XAMPP/xamppfiles/htdocs/contact_manager/header.php');
 ?>
<title> Creating a new user </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<!-- CSS file parameter -->
<div id="frm">

<!-- the following specifies a file that is what is used to processes the inputed data, its what we utilize to specify what exactly we want done with the collected user credential info  -->
<h2> Signing up as a new user<h2>
<form action= "create.php" method = "POST">
	<p>
	<div class="form-group">
		<label> 

			<b>first_name:</b>
		</label>
		<input type = 'text' name='first_name' placeholder="Ian">
	</p>
	</div>

<p>
		<div class="form-group">
		<label> 
			<b>last_name:<b>
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
			<b>password:<b> 
			</label>
		<input type="text" name='password' placeholder= "password" >
	</div>
</p>


<!-- CSS file parameter -->
<input type = 'submit' id='btn' value="sign_up">
</form>
<!-- After registering a user into the database, redirect to te sign in page -->

</body>
</html> 
