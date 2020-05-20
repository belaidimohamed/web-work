<?php
	include_once 'dbh.inc.php';
	$wa9t1=$_POST['date_1'];
	$diplom1=$_POST['diploma_1'];
	$dec1=$_POST['dec_1'];

	$wa9t2=$_POST['date_2'];
	$diplom2=$_POST['diploma_2'];
	$dec2=$_POST['dec_2'];

	$wa9t3=$_POST['date_3'];
	$diplom3=$_POST['diploma_3'];
	$dec3=$_POST['dec_3'];

	$sql="insert into diploma (wa9t1,diploma1,decr1,wa9t2,diploma2,decr2,wa9t3,diploma3,decr3) values ('$wa9t1','$diplom1','$dec1','$wa9t2','$diplom2','$dec2','$wa9t3','$diplom3','$dec3');";
  	mysqli_query($conn,$sql);
  	header("Location: ../cv_generator_3.php?diploma=success")
?>