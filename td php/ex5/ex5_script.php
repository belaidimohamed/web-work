<?php
if(isset($_POST["nb1"])
    &&isset($_POST["nb2"]) &&isset($_POST["op"])
    &&!is_nan($_POST["nb1"])&&!is_nan($_POST["nb2"]))
{
    $nb1= $_POST["nb1"];
    $nb2= $_POST["nb2"];
    $val= $_POST["op"];
    echo $nb1." ".$nb2." ".$val;
    
    if($val =="+"){
        $result = $nb1 + $nb2;
        header("Location: ex5.php?res=$result");
    }
    if($val =="*"){
        $result = $nb1 * $nb2;
        header("Location: ex5.php?res=$result");
    }
    if($val =="/"){
        $result = $nb1 / $nb2;
        header("Location: ex5.php?res=$result");
    }
    if($val =="-"){
        $result = $nb1 - $nb2;
        header("Location: ex5.php?res=$result");
    }
    if($val =="%"){
        $result = $nb1 % $nb2;
        header("Location: ex5.php?res=$result");
    }
            
} ?>