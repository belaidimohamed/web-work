<?php
	include_once 'dbh.inc.php';
    $name=$_POST['name'];
    $pw=$_POST['password'];
    $sql="insert into users (user_name,user_password) values ('$name','$pw',);";
    mysqli_query($conn,$sql);
    header("Location: ../cv_generator_1.php?register=success")
?>