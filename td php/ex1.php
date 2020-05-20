<!DOCTYPE html>
<html>
    <head>
        <title>ex1</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php

            $ch = "patrick white michael jackson gabrialla robert";
            $array = explode(" ",$ch); 
            for ($j=0;$j<count($array);$j=$j+2) {
                echo wordwrap(strtoupper($array[$j]).ucfirst($array[$j+1]),20,"  ",1).'<br><br>';
            }
    
        ?>
    </body>
