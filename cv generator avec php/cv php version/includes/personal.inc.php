<?php
	include_once 'dbh.inc.php';
	$name=$_POST['name'];
	$birth=$_POST['birth'];
	$addres=$_POST['addresse'];
	$email=$_POST['email'];
	$drive=$_POST['drive'];
	$sql="insert into personal (name,birth,adress,email,kind) values ('$name','$birth','$addres','$email','$drive');";
  	mysqli_query($conn,$sql);
  	header("Location: ../cv_generator_2.php?personal=success")
?>