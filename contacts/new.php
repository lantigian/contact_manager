<!DOCTYPE html>
<html>
<head>

<?php include ('header.php') ?>

<body>
<title> Assignment Zero </title>

<h2> Creating a new contact<h2>
<form action= "create.php" method = "POST">
	<div class="form-group">
		<label> 

			<b>full_name:</b>
		</label>
		<input type = 'text' name='full_name' placeholder="Mickey Rat">
	</div>

	<div class="form-group">
		<label> 

			<b>age:<a>
		</label>
		<input type = 'text' name='age' placeholder="18">
	</div>
	<div class="form-group">
		<label> 
			<b>phone_number:<b>
			</label>
		<input type="text" name='phone_number' placeholder="xxx-xxx-xxxx">
	</div>
	<div class="form-group">
		<label>
			<b>email:<a> 
			</label>
		<input type="text" name="email" placeholder= 'neal4@gmail.com' >
	</div>

<input type = 'submit' value="submit">
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

