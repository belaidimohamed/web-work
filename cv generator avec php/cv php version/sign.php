<?php
	include_once 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="includes/register.inc.php" method="POST">
		<p>name : <input type="text" name="name" placeholder="Name"> </p>
		<p>password : <input type="password" name="password" placeholder="pass"> </p>
		<button type="submit" name="submit"> sign up </button>
	</form>

</body>
</html>
