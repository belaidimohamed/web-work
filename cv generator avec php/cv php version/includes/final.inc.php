<?php
	include_once 'dbh.inc.php';
	$lang=$_POST['lang'];
	$proj=$_POST['proj'];
	$club=$_POST['club'];
	
	$sql="insert into final (lang,proj,club) values ('$lang','$proj','$club');";
  	mysqli_query($conn,$sql);
  	header("Location: ../index.php?final=success")
?>