<?php
	include_once 'dbh.inc.php';
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$sql="insert into users (user_name,user_password) values ('$name','$pass');";
  	mysqli_query($conn,$sql);
  	header("Location: ../index.php?signup=success")
?>