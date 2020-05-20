<?php
	include_once 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="cv1.php" method="POST">
		<p>name : <input type="text" name="name" placeholder="Name"> </p>
		<p>password : <input type="password" name="password" placeholder="pass"> </p>
		<button type="submit" name="submit"> sign in </button>
	</form>
	<strong>
		if you don't have an account : 
	</strong><a href="sign.php">Register</a>

</body>
</html>
